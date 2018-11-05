<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         12:31
 */

namespace FatturaElettronicaXml;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

class XmlWriter
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
     * @return bool|float|int|string
     * @throws FatturaElettronicaException
     */
    public function encodeXml(){
        return trim($this->xmlEncoder->encode($this->fatturaElettronica->toArray(), 'xml', ['xml_root_node_name' => $this->rootXml]));
    }

    /**
     * @param $filePath
     * @throws FatturaElettronicaException
     */
    public function writeXml($filePath){
        file_put_contents($filePath,$this->encodeXml());
    }


}