<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-21
 * Time:         17:04
 */

namespace Advinser\FatturaElettronicaXml\Validation;
use Advinser\FatturaElettronicaXml\FatturaElettronicaException;

class ValidateXmlSchema
{

    /**
     * @var ValidateError[]
     */
    private $errors = [];

    /**
     * @var string
     */
    private $xmlData;

    /**
     * FatturaElettronicaValidate constructor.
     * @param bool $throwException
     */
    public function __construct(string $xmlData)
    {
        libxml_use_internal_errors(true);
        $this->xmlData = $xmlData;
    }

    /**
     * @param $xmlData
     * @return ValidateXmlSchema
     */
    public function validateSchemaXml(): ValidateXmlSchema
    {
        $xml = new \DOMDocument();
        $xml->loadXML($this->xmlData);

        $result = $xml->schemaValidate(__DIR__ . '/../../xsd/Schema_del_file_xml_FatturaPA_versione_1.2.1.xsd');
        if (!$result) {
            $libXmlErrors = libxml_get_errors();
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

                $this->errors[] = new ValidateError('XMLSchema', $level, trim($theError->message), $theError->code, $theError->line);
            }
            libxml_clear_errors();
        }
        return $this;
    }

    /**
     * @param $xmlData
     * @return ValidateError[]|array
     */
    public static function validateFromData($xmlData){
        $v = new self($xmlData);
        $v->validateSchemaXml();
        return $v->getErrors();
    }

    /**
     * @param $filePath
     * @return ValidateError[]|array
     * @throws FatturaElettronicaException
     */
    public static function validateFromFile($filePath){
        if(!is_file($filePath) || !is_readable($filePath)){
            throw new FatturaElettronicaException("Can't find or read file: ".$filePath);
        }
        $xmlData = file_get_contents($filePath);
        return self::validateFromData($xmlData);
    }

    /**
     * @return ValidateError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }


}