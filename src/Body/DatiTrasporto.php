<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:29
 */

namespace FatturaElettronicaXml\Body;


use FatturaElettronicaXml\Structures\Anagrafica;
use FatturaElettronicaXml\Structures\Fiscale;
use FatturaElettronicaXml\Structures\Indirizzo;

class DatiTrasporto
{
    /**
     * @var Fiscale|null
     */
    private $IdFiscaleIVA;
    /**
     * @var string|null
     */
    private $CodiceFiscale;
    /**
     * @var Anagrafica|null
     */
    private $Anagrafica;
    /**
     * @var string|null
     */
    private $NumeroLicenzaGuida;
    /**
     * @var string|null
     */
    private $MezzoTrasporto;
    /**
     * @var string|null
     */
    private $CausaleTrasporto;
    /**
     * @var string|null
     */
    private $NumeroColli;
    /**
     * @var string|null
     */
    private $Descrizione;
    /**
     * @var string|null
     */
    private $UnitaMisuraPeso;
    /**
     * @var string|null
     */
    private $PesoLordo;
    /**
     * @var string|null
     */
    private $PesoNetto;
    /**
     * @var string|null
     */
    private $DataOraRitiro;
    /**
     * @var string|null
     */
    private $DataInizioTrasporto;
    /**
     * @var string|null
     */
    private $TipoResa;
    /**
     * @var Indirizzo|null
     */
    private $IndirizzoResa;

    /**
     * @var string|null
     */
    private $DataOraConsegna;

    /**
     * @return Fiscale|null
     */
    public function getIdFiscaleIVA(): ?Fiscale
    {
        return $this->IdFiscaleIVA;
    }

    /**
     * @param Fiscale|null $IdFiscaleIVA
     * @return DatiTrasporto
     */
    public function setIdFiscaleIVA(?Fiscale $IdFiscaleIVA): DatiTrasporto
    {
        $this->IdFiscaleIVA = $IdFiscaleIVA;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodiceFiscale(): ?string
    {
        return $this->CodiceFiscale;
    }

    /**
     * @param null|string $CodiceFiscale
     * @return DatiTrasporto
     */
    public function setCodiceFiscale(?string $CodiceFiscale): DatiTrasporto
    {
        $this->CodiceFiscale = $CodiceFiscale;
        return $this;
    }

    /**
     * @return Anagrafica|null
     */
    public function getAnagrafica(): ?Anagrafica
    {
        return $this->Anagrafica;
    }

    /**
     * @param Anagrafica|null $Anagrafica
     * @return DatiTrasporto
     */
    public function setAnagrafica(?Anagrafica $Anagrafica): DatiTrasporto
    {
        $this->Anagrafica = $Anagrafica;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumeroLicenzaGuida(): ?string
    {
        return $this->NumeroLicenzaGuida;
    }

    /**
     * @param null|string $NumeroLicenzaGuida
     * @return DatiTrasporto
     */
    public function setNumeroLicenzaGuida(?string $NumeroLicenzaGuida): DatiTrasporto
    {
        $this->NumeroLicenzaGuida = $NumeroLicenzaGuida;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMezzoTrasporto(): ?string
    {
        return $this->MezzoTrasporto;
    }

    /**
     * @param null|string $MezzoTrasporto
     * @return DatiTrasporto
     */
    public function setMezzoTrasporto(?string $MezzoTrasporto): DatiTrasporto
    {
        $this->MezzoTrasporto = $MezzoTrasporto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCausaleTrasporto(): ?string
    {
        return $this->CausaleTrasporto;
    }

    /**
     * @param null|string $CausaleTrasporto
     * @return DatiTrasporto
     */
    public function setCausaleTrasporto(?string $CausaleTrasporto): DatiTrasporto
    {
        $this->CausaleTrasporto = $CausaleTrasporto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumeroColli(): ?string
    {
        return $this->NumeroColli;
    }

    /**
     * @param null|string $NumeroColli
     * @return DatiTrasporto
     */
    public function setNumeroColli(?string $NumeroColli): DatiTrasporto
    {
        $this->NumeroColli = $NumeroColli;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescrizione(): ?string
    {
        return $this->Descrizione;
    }

    /**
     * @param null|string $Descrizione
     * @return DatiTrasporto
     */
    public function setDescrizione(?string $Descrizione): DatiTrasporto
    {
        $this->Descrizione = $Descrizione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUnitaMisuraPeso(): ?string
    {
        return $this->UnitaMisuraPeso;
    }

    /**
     * @param null|string $UnitaMisuraPeso
     * @return DatiTrasporto
     */
    public function setUnitaMisuraPeso(?string $UnitaMisuraPeso): DatiTrasporto
    {
        $this->UnitaMisuraPeso = $UnitaMisuraPeso;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPesoLordo(): ?string
    {
        return $this->PesoLordo;
    }

    /**
     * @param null|string $PesoLordo
     * @return DatiTrasporto
     */
    public function setPesoLordo(?string $PesoLordo): DatiTrasporto
    {
        $this->PesoLordo = $PesoLordo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPesoNetto(): ?string
    {
        return $this->PesoNetto;
    }

    /**
     * @param null|string $PesoNetto
     * @return DatiTrasporto
     */
    public function setPesoNetto(?string $PesoNetto): DatiTrasporto
    {
        $this->PesoNetto = $PesoNetto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataOraRitiro(): ?string
    {
        return $this->DataOraRitiro;
    }

    /**
     * @param null|string $DataOraRitiro
     * @return DatiTrasporto
     */
    public function setDataOraRitiro(?string $DataOraRitiro): DatiTrasporto
    {
        $this->DataOraRitiro = $DataOraRitiro;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataInizioTrasporto(): ?string
    {
        return $this->DataInizioTrasporto;
    }

    /**
     * @param null|string $DataInizioTrasporto
     * @return DatiTrasporto
     */
    public function setDataInizioTrasporto(?string $DataInizioTrasporto): DatiTrasporto
    {
        $this->DataInizioTrasporto = $DataInizioTrasporto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTipoResa(): ?string
    {
        return $this->TipoResa;
    }

    /**
     * @param null|string $TipoResa
     * @return DatiTrasporto
     */
    public function setTipoResa(?string $TipoResa): DatiTrasporto
    {
        $this->TipoResa = $TipoResa;
        return $this;
    }

    /**
     * @return Indirizzo|null
     */
    public function getIndirizzoResa(): ?Indirizzo
    {
        return $this->IndirizzoResa;
    }

    /**
     * @param Indirizzo|null $IndirizzoResa
     * @return DatiTrasporto
     */
    public function setIndirizzoResa(?Indirizzo $IndirizzoResa): DatiTrasporto
    {
        $this->IndirizzoResa = $IndirizzoResa;
        return $this;
    }


    /**
     * @return null|string
     */
    public function getDataOraConsegna(): ?string
    {
        return $this->DataOraConsegna;
    }

    /**
     * @param null|string $DataOraConsegna
     * @return DatiTrasporto
     */
    public function setDataOraConsegna(?string $DataOraConsegna): DatiTrasporto
    {
        $this->DataOraConsegna = $DataOraConsegna;
        return $this;
    }


    public function toArray()
    {
        //todo aggiungere validazione
        $array = [
            'DatiAnagraficiVettore' => [
                'IdFiscaleIVA' => null,
                'CodiceFiscale' => $this->getCodiceFiscale(),
                'Anagrafica' => null,
                'NumeroLicenzaGuida' => $this->getNumeroLicenzaGuida(),
            ],
            'MezzoTrasporto' => null,
            'CausaleTrasporto' => null,
            'NumeroColli' => null,
            'Descrizione' => null,
            'UnitaMisuraPeso' => null,
            'PesoLordo' => null,
            'PesoNetto' => null,
            'DataOraRitiro' => null,
            'DataInizioTrasporto' => null,
            'TipoResa' => null,
            'IndirizzoResa' => null,
            'DataOraConsegna' => null,
        ];


        if ($this->getIdFiscaleIVA() instanceof Fiscale) {
            $array['DatiAnagraficiVettore']['IdFiscaleIVA'] = $this->getIdFiscaleIVA()->toArray();
        }

        if ($this->getAnagrafica() instanceof Anagrafica) {
            $array['DatiAnagraficiVettore']['Anagrafica'] = $this->getAnagrafica()->toArray();
            if (empty($array['DatiAnagraficiVettore']['Anagrafica'])) {
                $array['DatiAnagraficiVettore']['Anagrafica'] = null;
            }
        }

        if (!empty($this->getMezzoTrasporto())) {
            $array['MezzoTrasporto'] = $this->getMezzoTrasporto();
        }
        if (!empty($this->getCausaleTrasporto())) {
            $array['CausaleTrasporto'] = $this->getCausaleTrasporto();
        }
        if (!empty($this->getNumeroColli())) {
            $array['NumeroColli'] = $this->getNumeroColli();
        }
        if (!empty($this->getDescrizione())) {
            $array['Descrizione'] = $this->getDescrizione();
        }
        if (!empty($this->getUnitaMisuraPeso())) {
            $array['UnitaMisuraPeso'] = $this->getUnitaMisuraPeso();
        }
        if (!empty($this->getPesoLordo())) {
            $array['PesoLordo'] = $this->getPesoLordo();
        }
        if (!empty($this->getPesoNetto())) {
            $array['PesoNetto'] = $this->getPesoNetto();
        }
        if (!empty($this->getDataOraRitiro())) {
            $array['DataOraRitiro'] = $this->getDataOraRitiro();
        }
        if (!empty($this->getDataInizioTrasporto())) {
            $array['DataInizioTrasporto'] = $this->getDataInizioTrasporto();
        }
        if (!empty($this->getTipoResa())) {
            $array['TipoResa'] = $this->getTipoResa();
        }

        if ($this->getIndirizzoResa() instanceof Indirizzo) {
            $array['IndirizzoResa'] = $this->getIndirizzoResa()->toArray();
        }

        if (!empty($this->getDataOraConsegna())) {
            $array['DataOraConsegna'] = $this->getDataOraConsegna();
        }

        return $array;
    }

    /**
     * @param array $array
     * @return DatiTrasporto
     */
    public static function fromArray(array $array): DatiTrasporto
    {
        $o = new DatiTrasporto();


        if (!empty($array['DatiAnagraficiVettore']['IdFiscaleIVA'])) {
            $o->setIdFiscaleIVA(Fiscale::fromArray($array['DatiAnagraficiVettore']['IdFiscaleIVA']));
        }

        if (!empty($array['DatiAnagraficiVettore']['Anagrafica'])) {
            $o->setAnagrafica(Anagrafica::fromArray($array['DatiAnagraficiVettore']['Anagrafica']));
        }

        if (!empty($array['MezzoTrasporto'])) {
            $o->setMezzoTrasporto($array['MezzoTrasporto']);
        }
        if (!empty($array['CausaleTrasporto'])) {
            $o->setCausaleTrasporto($array['CausaleTrasporto']);
        }
        if (!empty($array['NumeroColli'])) {
            $o->setNumeroColli($array['NumeroColli']);
        }
        if (!empty($array['Descrizione'])) {
            $o->setDescrizione($array['Descrizione']);
        }
        if (!empty($array['UnitaMisuraPeso'])) {
            $o->setUnitaMisuraPeso($array['UnitaMisuraPeso']);
        }
        if (!empty($array['PesoLordo'])) {
            $o->setPesoLordo($array['PesoLordo']);
        }
        if (!empty($array['PesoNetto'])) {
            $o->setPesoNetto($array['PesoNetto']);
        }
        if (!empty($array['DataOraRitiro'])) {
            $o->setDataOraRitiro($array['DataOraRitiro']);
        }
        if (!empty($array['DataInizioTrasporto'])) {
            $o->setDataInizioTrasporto($array['DataInizioTrasporto']);
        }
        if (!empty($array['TipoResa'])) {
            $o->setTipoResa($array['TipoResa']);
        }

        if (!empty($array['IndirizzoResa'])) {
            $o->setIndirizzoResa(Indirizzo::fromArray($array['IndirizzoResa']));
        }
        if (!empty($array['DataOraConsegna'])) {
            $o->setDataOraConsegna($array['DataOraConsegna']);
        }

        return $o;
    }


}