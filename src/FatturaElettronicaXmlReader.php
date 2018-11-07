<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         15:58
 */

namespace Advinser\FatturaElettronicaXml;
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
     * @return FatturaElettronica
     * @throws FatturaElettronicaException
     */
    public function decodeXml(string $source){
        $a = $this->xmlEncoder->decode($this->clearSignature($source),null);
        $fattura = FatturaElettronica::fromArray($a);

        return $fattura;
    }

    /**
     * @param string $filePath
     * @return FatturaElettronica
     * @throws FatturaElettronicaException
     */
    public static function decodeFromFile(string $filePath){
        $o = new FatturaElettronicaXmlReader();
        return $o->decodeXml(file_get_contents($filePath));
    }

    /**
     * @param string $input
     * @return string
     */
    public function clearSignature(string $input){
        $input = substr($input, strpos($input, '<?xml '));
        preg_match_all('/<\/.+?>/', $input, $matches, PREG_OFFSET_CAPTURE);
        $lastMatch = end($matches[0]);
        return substr($input, 0, $lastMatch[1]).$lastMatch[0];
    }
}