<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:57
 */

namespace Advinser\FatturaElettronicaXml\Header;


use Advinser\FatturaElettronicaXml\AbsModels;
use Advinser\FatturaElettronicaXml\FatturaElettronicaException;

class FatturaElettronicaHeader extends AbsModels
{
    /**
     * @var DatiTrasmissione
     */
    private $datiTrasmissione;
    /**
     * @var CedentePrestatore
     */
    private $cedentePrestatore;
    /**
     * @var RappresentanteFiscale
     */
    private $rappresentanteFiscale = null;
    /**
     * @var CessionarioCommittente
     */
    private $cessionarioCommittente;
    /**
     * @var TerzoIntermediarioOSoggettoEmittente
     */
    private $terzoIntermediarioOSoggettoEmittente = null;
    /**
     * @var string|null
     */
    private $soggettoEmittente = null;

    /**
     * FatturaElettronicaHeader constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return DatiTrasmissione
     */
    public function getDatiTrasmissione(): DatiTrasmissione
    {
        return $this->datiTrasmissione;
    }

    /**
     * @param DatiTrasmissione $datiTrasmissione
     * @return FatturaElettronicaHeader
     */
    public function setDatiTrasmissione(DatiTrasmissione $datiTrasmissione): FatturaElettronicaHeader
    {
        $this->datiTrasmissione = $datiTrasmissione;
        return $this;
    }

    /**
     * @return CedentePrestatore
     */
    public function getCedentePrestatore(): CedentePrestatore
    {
        return $this->cedentePrestatore;
    }

    /**
     * @param CedentePrestatore $cedentePrestatore
     * @return FatturaElettronicaHeader
     */
    public function setCedentePrestatore(CedentePrestatore $cedentePrestatore): FatturaElettronicaHeader
    {
        $this->cedentePrestatore = $cedentePrestatore;
        return $this;
    }

    /**
     * @return RappresentanteFiscale
     */
    public function getRappresentanteFiscale(): ?RappresentanteFiscale
    {
        return $this->rappresentanteFiscale;
    }

    /**
     * @param RappresentanteFiscale $rappresentanteFiscale
     * @return FatturaElettronicaHeader
     */
    public function setRappresentanteFiscale(RappresentanteFiscale $rappresentanteFiscale): FatturaElettronicaHeader
    {
        $this->rappresentanteFiscale = $rappresentanteFiscale;
        return $this;
    }

    /**
     * @return CessionarioCommittente
     */
    public function getCessionarioCommittente(): CessionarioCommittente
    {
        return $this->cessionarioCommittente;
    }

    /**
     * @param CessionarioCommittente $cessionarioCommittente
     * @return FatturaElettronicaHeader
     * @throws FatturaElettronicaException
     */
    public function setCessionarioCommittente(CessionarioCommittente $cessionarioCommittente): FatturaElettronicaHeader
    {
//        if (empty($cessionarioCommittente->getIdFiscaleIVA()) && empty($cessionarioCommittente->getCodiceFiscale())) {
//            throw new FatturaElettronicaException("You must fill either the field 'Codice Fiscale'
//                or the field 'Id Fiscale IVA'");
//        }
        $this->cessionarioCommittente = $cessionarioCommittente;
        return $this;
    }

    /**
     * @return TerzoIntermediarioOSoggettoEmittente
     */
    public function getTerzoIntermediarioOSoggettoEmittente(): ?TerzoIntermediarioOSoggettoEmittente
    {
        return $this->terzoIntermediarioOSoggettoEmittente;
    }

    /**
     * @param TerzoIntermediarioOSoggettoEmittente $terzoIntermediarioOSoggettoEmittente
     * @return FatturaElettronicaHeader
     */
    public function setTerzoIntermediarioOSoggettoEmittente(TerzoIntermediarioOSoggettoEmittente $terzoIntermediarioOSoggettoEmittente): FatturaElettronicaHeader
    {
        $this->terzoIntermediarioOSoggettoEmittente = $terzoIntermediarioOSoggettoEmittente;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoggettoEmittente(): ?string
    {
        return $this->soggettoEmittente;
    }

    /**
     * @param string $soggettoEmittente
     * @return FatturaElettronicaHeader
     */
    public function setSoggettoEmittente(string $soggettoEmittente): FatturaElettronicaHeader
    {
        $this->soggettoEmittente = $soggettoEmittente;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [
            'DatiTrasmissione' => null,
            'CedentePrestatore' => null,
            'RappresentanteFiscale' => null,
            'CessionarioCommittente' => null,
            'TerzoIntermediarioOSoggettoEmittente' => null,
            'SoggettoEmittente' => $this->getSoggettoEmittente()
        ];

        if ($this->getDatiTrasmissione() instanceof DatiTrasmissione) {
            $array['DatiTrasmissione'] = $this->getDatiTrasmissione()->toArray();
        }
        if ($this->getCedentePrestatore() instanceof CedentePrestatore) {
            $array['CedentePrestatore'] = $this->getCedentePrestatore()->toArray();
        }
        if ($this->getRappresentanteFiscale() instanceof RappresentanteFiscale) {
            $array['RappresentanteFiscale'] = $this->getRappresentanteFiscale()->toArray();
        }
        if ($this->getCessionarioCommittente() instanceof CessionarioCommittente) {
            $array['CessionarioCommittente'] = $this->getCessionarioCommittente()->toArray();
        }
        if ($this->getTerzoIntermediarioOSoggettoEmittente() instanceof TerzoIntermediarioOSoggettoEmittente) {
            $array['TerzoIntermediarioOSoggettoEmittente'] = $this->getTerzoIntermediarioOSoggettoEmittente()->toArray();
        }
        return $this->clean_array($array);
    }


    /**
     * @param array $array
     * @return FatturaElettronicaHeader
     * @throws FatturaElettronicaException
     */
    public static function fromArray(array $array): FatturaElettronicaHeader
    {
        $o = new FatturaElettronicaHeader();

        if (!empty($array['DatiTrasmissione'])) {
            $o->setDatiTrasmissione(DatiTrasmissione::fromArray($array['DatiTrasmissione']));
        }
        if (!empty($array['CedentePrestatore'])) {
            $o->setCedentePrestatore(CedentePrestatore::fromArray($array['CedentePrestatore']));
        }
        if (!empty($array['RappresentanteFiscale'])) {
            $o->setRappresentanteFiscale(RappresentanteFiscale::fromArray($array['RappresentanteFiscale']));
        }
        if (!empty($array['CessionarioCommittente'])) {
            $o->setCessionarioCommittente(CessionarioCommittente::fromArray($array['CessionarioCommittente']));
        }
        if (!empty($array['TerzoIntermediarioOSoggettoEmittente'])) {
            $o->setTerzoIntermediarioOSoggettoEmittente(TerzoIntermediarioOSoggettoEmittente::fromArray($array['TerzoIntermediarioOSoggettoEmittente']));
        }
        return $o;
    }

}