<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:29
 */

namespace FatturaElettronicaXml\Body;


use FatturaElettronicaXml\Structures\Anagrafica;
use FatturaElettronicaXml\Structures\Fiscale;

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
     * @var string|null
     */
    private $ResaIndirizzo;
    /**
     * @var string|null
     */
    private $ResaNumeroCivico;
    /**
     * @var string|null
     */
    private $ResaCAP;
    /**
     * @var string|null
     */
    private $ResaComune;
    /**
     * @var string|null
     */
    private $ResaProvincia;
    /**
     * @var string|null
     */
    private $ResaNazione;
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
     * @return null|string
     */
    public function getResaIndirizzo(): ?string
    {
        return $this->ResaIndirizzo;
    }

    /**
     * @param null|string $ResaIndirizzo
     * @return DatiTrasporto
     */
    public function setResaIndirizzo(?string $ResaIndirizzo): DatiTrasporto
    {
        $this->ResaIndirizzo = $ResaIndirizzo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getResaNumeroCivico(): ?string
    {
        return $this->ResaNumeroCivico;
    }

    /**
     * @param null|string $ResaNumeroCivico
     * @return DatiTrasporto
     */
    public function setResaNumeroCivico(?string $ResaNumeroCivico): DatiTrasporto
    {
        $this->ResaNumeroCivico = $ResaNumeroCivico;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getResaCAP(): ?string
    {
        return $this->ResaCAP;
    }

    /**
     * @param null|string $ResaCAP
     * @return DatiTrasporto
     */
    public function setResaCAP(?string $ResaCAP): DatiTrasporto
    {
        $this->ResaCAP = $ResaCAP;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getResaComune(): ?string
    {
        return $this->ResaComune;
    }

    /**
     * @param null|string $ResaComune
     * @return DatiTrasporto
     */
    public function setResaComune(?string $ResaComune): DatiTrasporto
    {
        $this->ResaComune = $ResaComune;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getResaProvincia(): ?string
    {
        return $this->ResaProvincia;
    }

    /**
     * @param null|string $ResaProvincia
     * @return DatiTrasporto
     */
    public function setResaProvincia(?string $ResaProvincia): DatiTrasporto
    {
        $this->ResaProvincia = $ResaProvincia;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getResaNazione(): ?string
    {
        return $this->ResaNazione;
    }

    /**
     * @param null|string $ResaNazione
     * @return DatiTrasporto
     */
    public function setResaNazione(?string $ResaNazione): DatiTrasporto
    {
        $this->ResaNazione = $ResaNazione;
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

        if(!empty($this->getResaIndirizzo())){
            $array['IndirizzoResa']['Indirizzo'] = $this->getResaIndirizzo();
        }
        if(!empty($this->getResaNumeroCivico())){
            $array['IndirizzoResa']['NumeroCivico'] = $this->getResaNumeroCivico();
        }
        if(!empty($this->getResaCAP())){
            $array['IndirizzoResa']['CAP'] = $this->getResaCAP();
        }
        if(!empty($this->getResaComune())){
            $array['IndirizzoResa']['Comune'] = $this->getResaComune();
        }
        if(!empty($this->getResaProvincia())){
            $array['IndirizzoResa']['Provincia'] = $this->getResaProvincia();
        }
        if(!empty($this->getResaNazione())){
            $array['IndirizzoResa']['Nazione'] = $this->getResaNazione();
        }

        if($this->getIdFiscaleIVA() instanceof Fiscale){
            $array['DatiAnagraficiVettore']['IdFiscaleIVA'] = $this->getIdFiscaleIVA()->toArray();
            if(empty($array['DatiAnagraficiVettore']['IdFiscaleIVA'])){
                $array['DatiAnagraficiVettore']['IdFiscaleIVA'] = null;
            }
        }

        if($this->getAnagrafica() instanceof Anagrafica){
            $array['DatiAnagraficiVettore']['Anagrafica'] = $this->getAnagrafica()->toArray();
            if(empty($array['DatiAnagraficiVettore']['Anagrafica'])){
                $array['DatiAnagraficiVettore']['Anagrafica'] = null;
            }
        }

        return $array;
    }
}