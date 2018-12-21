<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         12:31
 */

namespace Advinser\FatturaElettronicaXml;

use Symfony\Component\Serializer\Encoder\XmlEncoder;

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
    }

    /**
     * @return string
     * @throws FatturaElettronicaException
     */
    public function encodeXml(): string
    {
        return trim($this->xmlEncoder->encode(
            $this->fatturaElettronica->toArray(),
            'xml',
            [
                'xml_root_node_name' => $this->rootXml,
                'xml_encoding' => 'UTF-8'
            ]
        ));
    }

    /**
     * @param string $filePath
     * @return bool
     * @throws FatturaElettronicaException
     */
    public function writeXml(string $filePath): bool
    {
        return file_put_contents($filePath, $this->encodeXml()) !== false;
    }


}