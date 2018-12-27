<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         15:58
 */

namespace Advinser\FatturaElettronicaXml;

use Advinser\FatturaElettronicaXml\Validation\FatturaElettronicaValidateException;
use Advinser\FatturaElettronicaXml\Validation\ValidateXmlSchema;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

class FatturaElettronicaXmlReader
{
    /**
     * @var XmlEncoder
     */
    private $xmlEncoder;

    /**
     * XmlReader constructor.
     */
    public function __construct()
    {
        $this->xmlEncoder = new XmlEncoder();
    }

    /**
     * @param string $source
     * @param bool $autoValidate
     * @param bool $throwValidateException
     * @return FatturaElettronica
     * @throws FatturaElettronicaException
     * @throws FatturaElettronicaValidateException
     */
    public function decodeXml(string $source, $autoValidate = false, $throwValidateException = true)
    {
        $source = $this->clearSignature($source);
        $a = $this->xmlEncoder->decode($source, null);
        $fattura = FatturaElettronica::fromArray($a, $autoValidate, $throwValidateException);
        if ($autoValidate) {
            foreach (ValidateXmlSchema::validateFromData($source) as $error) {
                $fattura->addError($error);
            }
        }

        if ($fattura->isThrowValidateException() && !$fattura->isValid()) {
            throw new FatturaElettronicaValidateException($fattura->getErrorContainer());
        }

        return $fattura;
    }

    /**
     * @param string $filePath
     * @param bool $validate
     * @return FatturaElettronica
     * @throws FatturaElettronicaException
     * @throws FatturaElettronicaValidateException
     */
    public static function decodeFromFile(string $filePath, $validate = false, $throwException = false)
    {
        $o = new FatturaElettronicaXmlReader();
        return $o->decodeXml(file_get_contents($filePath), $validate, $throwException);
    }

    /**
     * @param string $input
     * @return string
     */
    public function clearSignature(string $input)
    {
        $input = substr($input, strpos($input, '<?xml '));
        preg_match_all('/<\/.+?>/', $input, $matches, PREG_OFFSET_CAPTURE);
        $lastMatch = end($matches[0]);
        return substr($input, 0, $lastMatch[1]) . $lastMatch[0];
    }


}