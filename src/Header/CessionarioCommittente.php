<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:08
 */

namespace FatturaElettronicaXml\Header;


use FatturaElettronicaXml\Structures\Anagrafica;
use FatturaElettronicaXml\Structures\Fiscale;
use FatturaElettronicaXml\Structures\Indirizzo;

class CessionarioCommittente
{
    /**
     * @var Fiscale|null
     */
    protected $IdFiscaleIVA = null;
    /**
     * @var string
     */
    protected $CodiceFiscale;

    /**
     * @var Anagrafica
     */
    protected $Anagrafica;

    /**
     * @var Indirizzo
     */
    protected $Sede;

    /**
     * @var Indirizzo|null
     */
    protected $StabileOrganizzazione = null;

    /**
     * @var null|string
     */
    protected $Ufficio = null;

    /**
     * @var null|string
     */
    protected $NumeroREA = null;

    /**
     * @var null|string
     */
    protected $CapitaleSociale = null;

    /**
     * @var null|string
     */
    protected $SocioUnico = null;
    /**
     * @var null|string
     */
    protected $StatoLiquidazione = null;
    /**
     * @var null|string
     */
    protected $Telefono = null;

    /**
     * @var null|string
     */
    protected $Email = null;

    /**
     * @var null|string
     */
    protected $Fax = null;
    /**
     * @var null|string
     */
    protected $RiferimentoAmministrazione = null;
    /**
     * @var Fiscale|null
     */
    private $RappresentanteFiscaleIdFiscaleIVA = null;

    /**
     * @var string|null
     */
    private $RappresentanteFiscaleDenominazione = null;
    /**
     * @var string|null
     */
    private $RappresentanteFiscaleNome = null;
    /**
     * @var string|null
     */
    private $RappresentanteFiscaleCognome = null;

    /**
     * @return Fiscale
     */
    public function getIdFiscaleIVA(): ?Fiscale
    {
        return $this->IdFiscaleIVA;
    }

    /**
     * @param Fiscale $IdFiscaleIVA
     * @return CessionarioCommittente
     */
    public function setIdFiscaleIVA(Fiscale $IdFiscaleIVA): CessionarioCommittente
    {
        $this->IdFiscaleIVA = $IdFiscaleIVA;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodiceFiscale(): string
    {
        return $this->CodiceFiscale;
    }

    /**
     * @param string $CodiceFiscale
     * @return CessionarioCommittente
     */
    public function setCodiceFiscale(string $CodiceFiscale): CessionarioCommittente
    {
        $this->CodiceFiscale = $CodiceFiscale;
        return $this;
    }

    /**
     * @return Anagrafica
     */
    public function getAnagrafica(): Anagrafica
    {
        return $this->Anagrafica;
    }

    /**
     * @param Anagrafica $Anagrafica
     * @return CessionarioCommittente
     */
    public function setAnagrafica(Anagrafica $Anagrafica): CessionarioCommittente
    {
        $this->Anagrafica = $Anagrafica;
        return $this;
    }

    /**
     * @return Indirizzo
     */
    public function getSede(): Indirizzo
    {
        return $this->Sede;
    }

    /**
     * @param Indirizzo $Sede
     * @return CessionarioCommittente
     */
    public function setSede(Indirizzo $Sede): CessionarioCommittente
    {
        $this->Sede = $Sede;
        return $this;
    }

    /**
     * @return Indirizzo|null
     */
    public function getStabileOrganizzazione(): ?Indirizzo
    {
        return $this->StabileOrganizzazione;
    }

    /**
     * @param Indirizzo|null $StabileOrganizzazione
     * @return CessionarioCommittente
     */
    public function setStabileOrganizzazione(?Indirizzo $StabileOrganizzazione): CessionarioCommittente
    {
        $this->StabileOrganizzazione = $StabileOrganizzazione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUfficio(): ?string
    {
        return $this->Ufficio;
    }

    /**
     * @param null|string $Ufficio
     * @return CessionarioCommittente
     */
    public function setUfficio(?string $Ufficio): CessionarioCommittente
    {
        $this->Ufficio = $Ufficio;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumeroREA(): ?string
    {
        return $this->NumeroREA;
    }

    /**
     * @param null|string $NumeroREA
     * @return CessionarioCommittente
     */
    public function setNumeroREA(?string $NumeroREA): CessionarioCommittente
    {
        $this->NumeroREA = $NumeroREA;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCapitaleSociale(): ?string
    {
        return $this->CapitaleSociale;
    }

    /**
     * @param null|string $CapitaleSociale
     * @return CessionarioCommittente
     */
    public function setCapitaleSociale(?string $CapitaleSociale): CessionarioCommittente
    {
        $this->CapitaleSociale = $CapitaleSociale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSocioUnico(): ?string
    {
        return $this->SocioUnico;
    }

    /**
     * @param null|string $SocioUnico
     * @return CessionarioCommittente
     */
    public function setSocioUnico(?string $SocioUnico): CessionarioCommittente
    {
        $this->SocioUnico = $SocioUnico;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatoLiquidazione(): ?string
    {
        return $this->StatoLiquidazione;
    }

    /**
     * @param null|string $StatoLiquidazione
     * @return CessionarioCommittente
     */
    public function setStatoLiquidazione(?string $StatoLiquidazione): CessionarioCommittente
    {
        $this->StatoLiquidazione = $StatoLiquidazione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    /**
     * @param null|string $Telefono
     * @return CessionarioCommittente
     */
    public function setTelefono(?string $Telefono): CessionarioCommittente
    {
        $this->Telefono = $Telefono;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @param null|string $Email
     * @return CessionarioCommittente
     */
    public function setEmail(?string $Email): CessionarioCommittente
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFax(): ?string
    {
        return $this->Fax;
    }

    /**
     * @param null|string $Fax
     * @return CessionarioCommittente
     */
    public function setFax(?string $Fax): CessionarioCommittente
    {
        $this->Fax = $Fax;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRiferimentoAmministrazione(): ?string
    {
        return $this->RiferimentoAmministrazione;
    }

    /**
     * @param null|string $RiferimentoAmministrazione
     * @return CessionarioCommittente
     */
    public function setRiferimentoAmministrazione(?string $RiferimentoAmministrazione): CessionarioCommittente
    {
        $this->RiferimentoAmministrazione = $RiferimentoAmministrazione;
        return $this;
    }

    /**
     * @return Fiscale|null
     */
    public function getRappresentanteFiscaleIdFiscaleIVA(): ?Fiscale
    {
        return $this->RappresentanteFiscaleIdFiscaleIVA;
    }

    /**
     * @param Fiscale|null $RappresentanteFiscaleIdFiscaleIVA
     * @return CessionarioCommittente
     */
    public function setRappresentanteFiscaleIdFiscaleIVA(?Fiscale $RappresentanteFiscaleIdFiscaleIVA): CessionarioCommittente
    {
        $this->RappresentanteFiscaleIdFiscaleIVA = $RappresentanteFiscaleIdFiscaleIVA;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRappresentanteFiscaleDenominazione(): ?string
    {
        return $this->RappresentanteFiscaleDenominazione;
    }

    /**
     * @param null|string $RappresentanteFiscaleDenominazione
     * @return CessionarioCommittente
     */
    public function setRappresentanteFiscaleDenominazione(?string $RappresentanteFiscaleDenominazione): CessionarioCommittente
    {
        $this->RappresentanteFiscaleDenominazione = $RappresentanteFiscaleDenominazione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRappresentanteFiscaleNome(): ?string
    {
        return $this->RappresentanteFiscaleNome;
    }

    /**
     * @param null|string $RappresentanteFiscaleNome
     * @return CessionarioCommittente
     */
    public function setRappresentanteFiscaleNome(?string $RappresentanteFiscaleNome): CessionarioCommittente
    {
        $this->RappresentanteFiscaleNome = $RappresentanteFiscaleNome;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRappresentanteFiscaleCognome(): ?string
    {
        return $this->RappresentanteFiscaleCognome;
    }

    /**
     * @param null|string $RappresentanteFiscaleCognome
     * @return CessionarioCommittente
     */
    public function setRappresentanteFiscaleCognome(?string $RappresentanteFiscaleCognome): CessionarioCommittente
    {
        $this->RappresentanteFiscaleCognome = $RappresentanteFiscaleCognome;
        return $this;
    }

    public function toArray(){
        $array['DatiAnagrafici'] = [
            'IdFiscaleIVA' => ($this->getIdFiscaleIVA() instanceof Fiscale) ? $this->getIdFiscaleIVA()->toArray() : null,
            'CodiceFiscale' => $this->getCodiceFiscale(),
            'Anagrafica' => ($this->getAnagrafica() instanceof Indirizzo) ? $this->getAnagrafica()->toArray() : null,
        ];

        $array['DatiAnagrafici']['Sede'] = null;
        if($this->getSede() instanceof Indirizzo){
            $array['DatiAnagrafici']['Sede'] = $this->getSede()->toArray();
        }
        $array['DatiAnagrafici']['StabileOrganizzazione'] = null;
        if($this->getStabileOrganizzazione() instanceof Indirizzo){
            $array['DatiAnagrafici']['StabileOrganizzazione'] = $this->getStabileOrganizzazione()->toArray();
        }

        $array['DatiAnagrafici']['RappresentanteFiscale'] = null;
        if($this->getRappresentanteFiscaleIdFiscaleIVA() instanceof Fiscale){
            $array['DatiAnagrafici']['RappresentanteFiscale']['IdFiscaleIVA'] = $this->getRappresentanteFiscaleIdFiscaleIVA()->toArray();
        }
        if(!empty($this->getRappresentanteFiscaleDenominazione())){
            $array['DatiAnagrafici']['RappresentanteFiscale']['Denominazione'] = $this->getRappresentanteFiscaleDenominazione();
        }
        if(!empty($this->getRappresentanteFiscaleNome())){
            $array['DatiAnagrafici']['RappresentanteFiscale']['Nome'] = $this->getRappresentanteFiscaleNome();
        }
        if(!empty($this->getRappresentanteFiscaleCognome())){
            $array['DatiAnagrafici']['RappresentanteFiscale']['Cognome'] = $this->getRappresentanteFiscaleCognome();
        }

        return array_filter($array);
    }
}