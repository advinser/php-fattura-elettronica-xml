<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:08
 */

namespace Advinser\FatturaElettronicaXml\Header;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Structures\Anagrafica;
use Advinser\FatturaElettronicaXml\Structures\Fiscale;
use Advinser\FatturaElettronicaXml\Structures\Indirizzo;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;
use Advinser\FatturaElettronicaXml\Validation\Validators\VCodiceFiscale;

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
    public function getCodiceFiscale(): ?string
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
            'IdFiscaleIVA' => ($this->getIdFiscaleIVA() instanceof Fiscale) ? $this->getIdFiscaleIVA()->toArray() : null,//
            'CodiceFiscale' => $this->getCodiceFiscale(),//
            'Anagrafica' => ($this->getAnagrafica() instanceof Anagrafica) ? $this->getAnagrafica()->toArray() : null,//
        ];

        $array['Sede'] = null;
        if($this->getSede() instanceof Indirizzo){
            $array['Sede'] = $this->getSede()->toArray();
        }
        $array['StabileOrganizzazione'] = null;
        if($this->getStabileOrganizzazione() instanceof Indirizzo){
            $array['StabileOrganizzazione'] = $this->getStabileOrganizzazione()->toArray();
        }

        $array['RappresentanteFiscale'] = null;
        if($this->getRappresentanteFiscaleIdFiscaleIVA() instanceof Fiscale){
            $array['RappresentanteFiscale']['IdFiscaleIVA'] = $this->getRappresentanteFiscaleIdFiscaleIVA()->toArray();
        }
        if(!empty($this->getRappresentanteFiscaleDenominazione())){
            $array['RappresentanteFiscale']['Denominazione'] = $this->getRappresentanteFiscaleDenominazione();
        }
        if(!empty($this->getRappresentanteFiscaleNome())){
            $array['RappresentanteFiscale']['Nome'] = $this->getRappresentanteFiscaleNome();
        }
        if(!empty($this->getRappresentanteFiscaleCognome())){
            $array['RappresentanteFiscale']['Cognome'] = $this->getRappresentanteFiscaleCognome();
        }

        return $array;
    }

    /**
     * @param array $array
     * @return CessionarioCommittente
     */
    public static function fromArray(array $array):CessionarioCommittente
    {
        $o = new CessionarioCommittente();
        if(!empty($array['DatiAnagrafici']['IdFiscaleIVA'])){
            $o->setIdFiscaleIVA(Fiscale::fromArray($array['DatiAnagrafici']['IdFiscaleIVA']));
        }
        if(!empty($array['DatiAnagrafici']['CodiceFiscale'])){
            $o->setCodiceFiscale($array['DatiAnagrafici']['CodiceFiscale']);
        }
        if(!empty($array['DatiAnagrafici']['Anagrafica'])){
            $o->setAnagrafica(Anagrafica::fromArray($array['DatiAnagrafici']['Anagrafica']));
        }
        if (!empty($array['Sede'])) {
            $o->setSede(Indirizzo::fromArray($array['Sede']));
        }
        if (!empty($array['StabileOrganizzazione'])) {
            $o->setStabileOrganizzazione(Indirizzo::fromArray($array['StabileOrganizzazione']));
        }

        if(!empty($array['RappresentanteFiscale']['IdFiscaleIVA'])){
            $o->setRappresentanteFiscaleIdFiscaleIVA(Fiscale::fromArray($array['RappresentanteFiscale']['IdFiscaleIVA']));
        }
        if(!empty($array['RappresentanteFiscale']['Denominazione'])){
             $o->setRappresentanteFiscaleDenominazione($array['RappresentanteFiscale']['Denominazione']);
        }
        if(!empty($array['RappresentanteFiscale']['Nome'])){
            $o->setRappresentanteFiscaleNome($array['RappresentanteFiscale']['Nome']);
        }
        if(!empty($array['RappresentanteFiscale']['Cognome'])){
            $o->setRappresentanteFiscaleCognome($array['RappresentanteFiscale']['Cognome']);
        }
        
        return $o;
    }

    /**
     * @param $array
     * @param ValidateErrorContainer $errorContainer
     */
    public static function validate($array,ValidateErrorContainer $errorContainer){
        if(!empty($array['DatiAnagrafici']['IdFiscaleIVA'])){
            //todo check if CodiceFiscale is not empty, otherwise this element is required
            Fiscale::validate($array['DatiAnagrafici']['IdFiscaleIVA'],$errorContainer,'CessionarioCommittente::');
        }

        if(!empty($array['CodiceFiscale'])){
            VCodiceFiscale::validate($array['CodiceFiscale'],$errorContainer,'CessionarioCommittente::');
        }

        if(empty($array['DatiAnagrafici']['Anagrafica'])){
            $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Invalid value for 'Anagrafica', it can't be null or empty",'CessionarioCommittente::03',__LINE__));
        }else{
            Anagrafica::validate($array['DatiAnagrafici']['Anagrafica'],$errorContainer,'CessionarioCommittente::');
        }

        if(empty($array['Sede'])){
            $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Invalid value for 'Sede', it can't be null or empty",'CessionarioCommittente::04',__LINE__));
        }else{
            Indirizzo::validate($array['Sede'],$errorContainer,'CessionarioCommittente::Sede::');
        }

        if(!empty($array['StabileOrganizzazione'])){
            Indirizzo::validate($array['StabileOrganizzazione'],$errorContainer,'CessionarioCommittente::StabileOrganizzazione::');
        }

        if(!empty($array['RappresentanteFiscale']['IdFiscaleIVA'])){
            Fiscale::validate($array['RappresentanteFiscale']['IdFiscaleIVA'],$errorContainer,'CessionarioCommittente::');
        }

        $denominazioneIsset = false;
        $nomeIsset = false;
        $cognomeIsset = false;
        $tag = 'RappresentanteFiscale::';
        if (!empty($array['RappresentanteFiscale']['Denominazione'])) {
            $denominazioneIsset = true;
            if(strlen($array['RappresentanteFiscale']['Denominazione']) > 80){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Denominazione', length max is 80", $tag . 'CessionarioCommittente::06', __LINE__));
            }
        }

        if (!empty($array['RappresentanteFiscale']['Nome'])) {
            $nomeIsset = true;
            if(strlen($array['RappresentanteFiscale']['Nome']) > 60){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Nome', length max is 60", $tag . 'CessionarioCommittente::07', __LINE__));
            }
        }

        if (!empty($array['RappresentanteFiscale']['Cognome'])) {
            $cognomeIsset = true;
            if(strlen($array['RappresentanteFiscale']['Cognome']) > 60){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Cognome', length max is 60", $tag . 'CessionarioCommittente::08', __LINE__));
            }
        }
        if($denominazioneIsset && ($nomeIsset || $cognomeIsset)){
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Denominazione' can be used only if 'Nome' or 'Cognome' are not", $tag . 'CessionarioCommittente::09', __LINE__));

        }

    }
}