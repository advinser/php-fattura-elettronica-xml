<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:56
 */

namespace FatturaElettronicaXml;

use FatturaElettronicaXml\Body\FatturaElettronicaBody;
use FatturaElettronicaXml\Header\CedentePrestatore;
use FatturaElettronicaXml\Header\CessionarioCommittente;
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

        if ($header instanceof FatturaElettronicaHeader) {
            $this->versione = $header->getDatiTrasmissione()->getFormatoTrasmissione();
        }
    }

    /**
     * @return Structures\Fiscale|null
     */
    public function getPivaCedente()
    {
        if ($this->getHeader() instanceof FatturaElettronicaHeader) {
            if ($this->getHeader()->getCedentePrestatore() instanceof CedentePrestatore) {
                return $this->getHeader()->getCedentePrestatore()->getIdFiscaleIVA();
            }
        }
        return null;
    }

    /**
     * @return Structures\Fiscale|null
     */
    public function getPivaCommittente()
    {
        if ($this->getHeader() instanceof FatturaElettronicaHeader) {
            if ($this->getHeader()->getCessionarioCommittente() instanceof CessionarioCommittente) {
                return $this->getHeader()->getCessionarioCommittente()->getIdFiscaleIVA();
            }
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCodiceDestinatario()
    {
        if ($this->getHeader() instanceof FatturaElettronicaHeader) {
            if ($this->getHeader()->getCessionarioCommittente() instanceof CessionarioCommittente) {
                return $this->getHeader()->getDatiTrasmissione()->getCodiceDestinatario();
            }
        }
        return null;
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

    /**
     * @return array
     * @throws FatturaElettronicaException
     */
    public function toArray()
    {
        if (!$this->header instanceof FatturaElettronicaHeader) {
            throw new FatturaElettronicaException("missed istance of FatturaElettronicaHeader");
        }
        if (!$this->body instanceof FatturaElettronicaBody) {
            throw new FatturaElettronicaException("missed istance of FatturaElettronicaBody");

        }

        return [
            '@versione' => $this->versione,
            '@xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            '@xmlns:p' => 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2',
            '@xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            '@xsi:schemaLocation'=>'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd',
            'FatturaElettronicaHeader' => $this->header->toArray(),
            'FatturaElettronicaBody' => $this->body->toArray(),
        ];
    }

    /**
     * @param array $array
     * @return FatturaElettronica
     * @throws FatturaElettronicaException
     */
    public static function fromArray(array $array)
    {
        $o = new FatturaElettronica();

        if (!empty($array['FatturaElettronicaHeader'])) {
            $o->setHeader(FatturaElettronicaHeader::fromArray($array['FatturaElettronicaHeader']));
        }
        if (!empty($array['FatturaElettronicaBody'])) {
            $o->setBody(FatturaElettronicaBody::fromArray($array['FatturaElettronicaBody']));
        }

        return $o;
    }


}