<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-21
 * Time:         17:04
 */

namespace Advinser\FatturaElettronicaXml;


use Advinser\FatturaElettronicaXml\Structures\ValidateError;

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
     * @var ValidateError[]
     */
    private $errors = [];

    /**
     * @var bool
     */
    private $throwException = false;


    /**
     * FatturaElettronicaValidate constructor.
     * @param string $xmlData
     * @param bool $autoValidate
     * @throws FatturaElettronicaValidateException
     */
    public function __construct(string $xmlData, $autoValidate = true, $throwException = false)
    {
        $this->xmlData = $xmlData;
        libxml_use_internal_errors(true);
        $this->xml = new \DOMDocument();
        $this->xml->loadXML($xmlData);

        $this->throwException = $throwException;

        if ($autoValidate) {
            $this->validate();
        }
    }

    /**
     * @param $filePath
     * @return FatturaElettronicaValidate
     * @throws FatturaElettronicaValidateException
     */
    public static function validateFromFile($filePath, $throwException = false)
    {
        $data = file_get_contents($filePath);
        return new self($data, true,$throwException);
    }

    /**
     * @param $data
     * @return FatturaElettronicaValidate
     * @throws FatturaElettronicaValidateException
     */
    public static function validateFromData($data, $throwException = false)
    {
        return new self($data, true, $throwException);
    }

    /**
     * @param bool $exception
     * @throws FatturaElettronicaValidateException
     */
    public function validate($exception = false)
    {
        $result = $this->xml->schemaValidate(__DIR__ . '/../xsd/Schema_del_file_xml_FatturaPA_versione_1.2.1.xsd');
        $this->errors = [];
        if (!$result) {
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

                $this->errors[] = new ValidateError($level, trim($theError->message), $theError->code, $theError->line);

            }

            libxml_clear_errors();
        }

        if (!empty($this->errors) && $this->throwException) {
            throw new FatturaElettronicaValidateException($this->errors);
        }
    }

    /**
     * @return ValidateError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @return string
     */
    public function getXmlData(): string
    {
        return $this->xmlData;
    }

    /**
     * @param string $xmlData
     * @return FatturaElettronicaValidate
     */
    public function setXmlData(string $xmlData): FatturaElettronicaValidate
    {
        $this->xmlData = $xmlData;
        return $this;
    }

    /**
     * @return bool
     */
    public function isThrowException(): bool
    {
        return $this->throwException;
    }

    /**
     * @param bool $throwException
     * @return FatturaElettronicaValidate
     */
    public function setThrowException(bool $throwException): FatturaElettronicaValidate
    {
        $this->throwException = $throwException;
        return $this;
    }



}