<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-21
 * Time:         17:04
 */

namespace Advinser\FatturaElettronicaXml;


class FatturaElettronicaValidate
{
    /**
     * @var \DOMDocument
     */
    private $xml;

    /**
     * @var string
     */
    private $xmlData;

    /**
     * @var bool
     */
    private $isCLI;

    /**
     * @var string
     */
    const TEMPLATE_ERROR_HTTP = '<b>%s</b> | Code: <b>%s</b> | Message: <b>%s</b> | Line: %d <br/>';
    /**
     * @var string
     */
    const TEMPLATE_ERROR_CLI = "%s | Code: %s | Message: %s | Line: %d";

    /**
     * FatturaElettronicaValidate constructor.
     * @param string $xmlData
     * @param bool $validate
     * @throws FatturaElettronicaValidateException
     */
    public function __construct(string $xmlData,$validate = true)
    {
        $this->xmlData = $xmlData;
        libxml_use_internal_errors(true);
        $this->xml = new \DOMDocument();
        $this->xml->loadXML($xmlData);
        $this->isCLI = ( php_sapi_name() == 'cli' );
        if($validate){
            $this->validate();
        }
    }

    /**
     * @param $filePath
     * @return FatturaElettronicaValidate
     * @throws FatturaElettronicaValidateException
     */
    public static function validateFromFile($filePath){
        $data  =file_get_contents($filePath);
        return new self($data,true);
    }

    /**
     * @param $data
     * @return FatturaElettronicaValidate
     * @throws FatturaElettronicaValidateException
     */
    public static function validateFromData($data){
        return new self($data,true);
    }

    /**
     * @throws FatturaElettronicaValidateException
     */
    public function validate(){
        $msg_template = self::TEMPLATE_ERROR_CLI;
        if(!$this->isCLI){
            $msg_template = self::TEMPLATE_ERROR_HTTP;
        }
        $result = $this->xml->schemaValidate(__DIR__.'/../xsd/Schema_del_file_xml_FatturaPA_versione_1.2.1.xsd');
        if(!$result){
            $libXmlErrors = libxml_get_errors();
            $errorList = [];
            foreach ($libXmlErrors as $theError) {
                $level = '';
                switch ($theError->level) {
                    case LIBXML_ERR_WARNING:
                        $level = 'Warning';
                        break;
                    case LIBXML_ERR_ERROR:
                        $level = 'Error';
                        break;
                    case LIBXML_ERR_FATAL:
                        $level = 'Fatal Error';
                        break;
                }

                $errorList[] = sprintf($msg_template,$level,$theError->code,trim($theError->message),$theError->line);
            }

            if(!empty($errorList)){
                throw new FatturaElettronicaValidateException($errorList);
            }
            libxml_clear_errors();
        }
    }
}