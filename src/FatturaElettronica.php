<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:56
 */
namespace FatturaElettronicaXml;
use FatturaElettronicaXml\Body\FatturaElettronicaBody;
use FatturaElettronicaXml\Header\FatturaElettronicaHeader;


class FatturaElettronica
{
    /**
     * @var FatturaElettronicaHeader
     */
    private $header;
    /**
     * @var FatturaElettronicaBody
     */
    private $body;

    /**
     * @var string
     */
    private $versione;

    /**
     * FatturaElettronica constructor.
     * @param FatturaElettronicaHeader $header
     * @param FatturaElettronicaBody $body
     */
    public function __construct(FatturaElettronicaHeader $header = null, FatturaElettronicaBody $body = null)
    {
        $this->header = $header;
        $this->body = $body;

        if($header instanceof FatturaElettronicaHeader){
            $this->versione = $header->getDatiTrasmissione()->getFormatoTrasmissione();
        }
    }


    /**
     * @return FatturaElettronicaHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param FatturaElettronicaHeader $header
     * @return FatturaElettronica
     */
    public function setHeader($header)
    {
        $this->header = $header;
        $this->versione = $header->getDatiTrasmissione()->getFormatoTrasmissione();
        return $this;
    }

    /**
     * @return FatturaElettronicaBody
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param FatturaElettronicaBody $body
     * @return FatturaElettronica
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function toArray()
    {
        if(!$this->header instanceof FatturaElettronicaHeader){
            throw new FatturaElettronicaException("missed istance of FatturaElettronicaHeader");
        }
        if(!$this->body instanceof FatturaElettronicaBody){
            throw new FatturaElettronicaException("missed istance of FatturaElettronicaBody");

        }

        return [
            '@xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema',
            '@xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            '@xmlns:p' => 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2',
            '@versione' => $this->versione,
            'FatturaElettronicaHeader' => $this->header->toArray(),
            'FatturaElettronicaBody' => $this->body->toArray(),
        ];
    }


}