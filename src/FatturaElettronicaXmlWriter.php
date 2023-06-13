<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         12:31
 */

namespace Advinser\FatturaElettronicaXml;

use Advinser\FatturaElettronicaXml\Validation\FatturaElettronicaValidateException;
use Advinser\FatturaElettronicaXml\Validation\ValidateXmlSchema;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Serializer;

class FatturaElettronicaXmlWriter
{
    private $rootXml = 'p:FatturaElettronica';
    /**
     * @var XmlEncoder
     */
    private $xmlEncoder;

    /**
     * @var FatturaElettronica
     */
    private $fatturaElettronica;

    /**
     * XmlWriter constructor.
     * @param FatturaElettronica $fatturaElettronica
     */
    public function __construct(FatturaElettronica $fatturaElettronica)
    {
        $this->fatturaElettronica = $fatturaElettronica;
        $this->xmlEncoder = new XmlEncoder();
        $this->xmlEncoder->setSerializer(new Serializer());
    }

    /**
     * @return string
     * @throws FatturaElettronicaException
     * @throws FatturaElettronicaValidateException
     */
    public function encodeXml(): string
    {
        $xmlData = trim($this->xmlEncoder->encode(
            $this->fatturaElettronica->toArray(),
            'xml',
            [
                'xml_root_node_name' => $this->rootXml,
                'xml_encoding' => 'UTF-8'
            ]
        ));
        if ($this->fatturaElettronica->isAutoValidate()) {
            foreach (ValidateXmlSchema::validateFromData($xmlData) as $error) {
                $this->fatturaElettronica->addError($error);
            }
        }

        if ($this->fatturaElettronica->isThrowValidateException() && !$this->fatturaElettronica->isValid()) {
            throw new FatturaElettronicaValidateException($this->fatturaElettronica->getErrorContainer());
        }

        return $xmlData;
    }

    /**
     * @param string $filePath
     * @return bool
     * @throws FatturaElettronicaException
     * @throws FatturaElettronicaValidateException
     */
    public function writeXml(string $filePath): bool
    {
        return file_put_contents($filePath, $this->encodeXml()) !== false;
    }
}
