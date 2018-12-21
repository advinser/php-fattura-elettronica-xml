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
     * @param bool $validate
     * @return string
     * @throws FatturaElettronicaException
     * @throws FatturaElettronicaValidateException
     */
    public function encodeXml($validate = false): string
    {
        $xmlData =  trim($this->xmlEncoder->encode(
            $this->fatturaElettronica->toArray(),
            'xml',
            [
                'xml_root_node_name' => $this->rootXml,
                'xml_encoding' => 'UTF-8'
            ]
        ));
        if($validate){
            FatturaElettronicaValidate::validateFromData($xmlData);
        }

        return $xmlData;
    }

    /**
     * @param string $filePath
     * @param bool $validate
     * @return bool
     * @throws FatturaElettronicaException
     * @throws FatturaElettronicaValidateException
     */
    public function writeXml(string $filePath,$validate = false): bool
    {
        return file_put_contents($filePath, $this->encodeXml($validate)) !== false;
    }


}