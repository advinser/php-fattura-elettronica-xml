<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         15:58
 */

namespace FatturaElettronicaXml;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

class XmlReader
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
     * @param $source
     * @return FatturaElettronica
     */
    public function decodeXml($source){
        $fattura = new FatturaElettronica();

        return $fattura;
    }
}