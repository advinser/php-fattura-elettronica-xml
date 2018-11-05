<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:06
 */

namespace FatturaElettronicaXml\Header;


use FatturaElettronicaXml\Structures\Anagrafica;
use FatturaElettronicaXml\Structures\Fiscale;
use FatturaElettronicaXml\Structures\Indirizzo;
use FatturaElettronicaXml\FatturaElettronicaException;

class CedentePrestatore
{
    private $regimiFiscali = [
        'RF01' => 'Ordinario',
        'RF02' => 'Contribuenti minimi (art.1, c.96-117, L. 244/07)',
        'RF04' => 'Agricoltura e attività connesse e pesca (artt.34 e 34-bis, DPR 633/72)',
        'RF05' => 'Vendita sali e tabacchi (art.74, c.1, DPR. 633/72)',
        'RF06' => 'Commercio fiammiferi (art.74, c.1, DPR  633/72)',
        'RF07' => 'Editoria (art.74, c.1, DPR  633/72)',
        'RF08' => 'Gestione servizi telefonia pubblica (art.74, c.1, DPR 633/72)',
        'RF09' => 'Rivendita documenti di trasporto pubblico e di sosta (art.74, c.1, DPR  633/72)',
        'RF10' => 'Intrattenimenti, giochi e altre attività di cui alla tariffa allegata al DPR 640/72 (art.74, c.6, DPR 633/72)',
        'RF11' => 'Agenzie viaggi e turismo (art.74-ter, DPR 633/72)',
        'RF12' => 'Agriturismo (art.5, c.2, L. 413/91)',
        'RF13' => 'Vendite a domicilio (art.25-bis, c.6, DPR  600/73)',
        'RF14' => 'Rivendita beni usati, oggetti d’arte, d’antiquariato o da collezione (art.36, DL 41/95)',
        'RF15' => 'Agenzie di vendite all’asta di oggetti d’arte, antiquariato o da collezione (art.40-bis, DL 41/95)',
        'RF16' => 'IVA per cassa P.A. (art.6, c.5, DPR 633/72)',
        'RF17' => 'IVA per cassa (art. 32-bis, DL 83/2012)',
        'RF18' => 'Altro',
        'RF19' => 'Regime forfettario (art.1, c.54-89, L. 190/2014)',
    ];
    /**
     * @var Fiscale
     */
    protected $IdFiscaleIVA;
    /**
     * @var string
     */
    protected $CodiceFiscale;

    /**
     * @var Anagrafica
     */
    protected $Anagrafica;
    /**
     * @var null|string
     */
    protected $AlboProfessionale = null;

    /**
     * @var null|string
     */
    protected $ProvinciaAlbo = null;

    /**
     * @var null|string
     */
    protected $NumeroIscrizioneAlbo = null;

    /**
     * @var null|string
     */
    protected $DataIscrizioneAlbo = null;


    /**
     * @var string
     */
    protected $RegimeFiscale;

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
     * @return array
     */
    public function getRegimiFiscali(): array
    {
        return $this->regimiFiscali;
    }

    /**
     * @param array $regimiFiscali
     * @return CedentePrestatore
     */
    public function setRegimiFiscali(array $regimiFiscali): CedentePrestatore
    {
        $this->regimiFiscali = $regimiFiscali;
        return $this;
    }

    /**
     * @return Fiscale
     */
    public function getIdFiscaleIVA(): Fiscale
    {
        return $this->IdFiscaleIVA;
    }

    /**
     * @param Fiscale $IdFiscaleIVA
     * @return CedentePrestatore
     */
    public function setIdFiscaleIVA(Fiscale $IdFiscaleIVA): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setCodiceFiscale(string $CodiceFiscale): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setAnagrafica(Anagrafica $Anagrafica): CedentePrestatore
    {
        $this->Anagrafica = $Anagrafica;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAlboProfessionale(): ?string
    {
        return $this->AlboProfessionale;
    }

    /**
     * @param null|string $AlboProfessionale
     * @return CedentePrestatore
     */
    public function setAlboProfessionale(?string $AlboProfessionale): CedentePrestatore
    {
        $this->AlboProfessionale = $AlboProfessionale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProvinciaAlbo(): ?string
    {
        return $this->ProvinciaAlbo;
    }

    /**
     * @param null|string $ProvinciaAlbo
     * @return CedentePrestatore
     */
    public function setProvinciaAlbo(?string $ProvinciaAlbo): CedentePrestatore
    {
        $this->ProvinciaAlbo = $ProvinciaAlbo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumeroIscrizioneAlbo(): ?string
    {
        return $this->NumeroIscrizioneAlbo;
    }

    /**
     * @param null|string $NumeroIscrizioneAlbo
     * @return CedentePrestatore
     */
    public function setNumeroIscrizioneAlbo(?string $NumeroIscrizioneAlbo): CedentePrestatore
    {
        $this->NumeroIscrizioneAlbo = $NumeroIscrizioneAlbo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataIscrizioneAlbo(): ?string
    {
        return $this->DataIscrizioneAlbo;
    }

    /**
     * @param null|string $DataIscrizioneAlbo
     * @return CedentePrestatore
     */
    public function setDataIscrizioneAlbo(?string $DataIscrizioneAlbo): CedentePrestatore
    {
        $this->DataIscrizioneAlbo = $DataIscrizioneAlbo;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegimeFiscale(): string
    {
        return $this->RegimeFiscale;
    }

    /**
     * @param string $RegimeFiscale
     * @return $this
     * @throws FatturaElettronicaException
     */
    public function setRegimeFiscale(string $RegimeFiscale)
    {
        if (!isset($this->regimiFiscali[$RegimeFiscale])) {
            $buffer = "";
            foreach($this->regimiFiscali as $c=>$v){
                $buffer.=$c."\r\n";
            }
            throw new FatturaElettronicaException("Invalid value for 'RegimeFiscale', allowed value are:\r\n".$buffer);
        }
        $this->RegimeFiscale = $RegimeFiscale;
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
     * @return CedentePrestatore
     */
    public function setSede(Indirizzo $Sede): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setStabileOrganizzazione(?Indirizzo $StabileOrganizzazione): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setUfficio(?string $Ufficio): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setNumeroREA(?string $NumeroREA): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setCapitaleSociale(?string $CapitaleSociale): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setSocioUnico(?string $SocioUnico): CedentePrestatore
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
     * @return CedentePrestatore|null
     * @throws FatturaElettronicaException
     */
    public function setStatoLiquidazione(?string $StatoLiquidazione): ?CedentePrestatore
    {
        switch ($StatoLiquidazione){
            case 'LN':
            case 'LS':
                $this->StatoLiquidazione = $StatoLiquidazione;
                break;
            default:
                throw new FatturaElettronicaException("Invalid 'StatoLiquidazione' , allowed value are LN or LS");
                break;
        }
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
     * @return CedentePrestatore
     */
    public function setTelefono(?string $Telefono): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setEmail(?string $Email): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setFax(?string $Fax): CedentePrestatore
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
     * @return CedentePrestatore
     */
    public function setRiferimentoAmministrazione(?string $RiferimentoAmministrazione): CedentePrestatore
    {
        $this->RiferimentoAmministrazione = $RiferimentoAmministrazione;
        return $this;
    }



    /**
     * @return array
     */
    public function toArray(){
        $array['DatiAnagrafici'] = [
            'IdFiscaleIVA' => $this->getIdFiscaleIVA()->toArray(),
            'CodiceFiscale' => $this->getCodiceFiscale(),
            'Anagrafica' => $this->getAnagrafica()->toArray(),
            'RegimeFiscale' => $this->getRegimeFiscale(),
        ];

        $array['DatiAnagrafici']['Sede'] = null;
        if($this->getSede() instanceof Indirizzo){
            $array['DatiAnagrafici']['Sede'] = $this->getSede()->toArray();
        }
        $array['DatiAnagrafici']['StabileOrganizzazione'] = null;
        if($this->getStabileOrganizzazione() instanceof Indirizzo){
            $array['DatiAnagrafici']['StabileOrganizzazione'] = $this->getStabileOrganizzazione()->toArray();
            if(empty($array['DatiAnagrafici']['StabileOrganizzazione'])){
                $array['DatiAnagrafici']['StabileOrganizzazione'] = null;
            }
        }

        $array['DatiAnagrafici']['IscrizioneREA'] = null;
        if(!empty($this->getUfficio())){
            $array['DatiAnagrafici']['IscrizioneREA']['Ufficio'] = $this->getUfficio();
        }
        if(!empty($this->getNumeroREA())){
            $array['DatiAnagrafici']['IscrizioneREA']['NumeroREA'] = $this->getNumeroREA();
        }
        if(!empty($this->getCapitaleSociale())){
            $array['DatiAnagrafici']['IscrizioneREA']['CapitaleSociale'] = $this->getCapitaleSociale();
        }
        if(!empty($this->getSocioUnico())){
            $array['DatiAnagrafici']['IscrizioneREA']['SocioUnico'] = $this->getSocioUnico();
        }
        if(!empty($this->getStatoLiquidazione())){
            $array['DatiAnagrafici']['IscrizioneREA']['StatoLiquidazione'] = $this->getStatoLiquidazione();
        }

        $array['DatiAnagrafici']['Contatti'] = null;
        if(!empty($this->getTelefono())){
            $array['DatiAnagrafici']['Contatti']['Telefono'] = $this->getTelefono();
        }
        if(!empty($this->getFax())){
            $array['DatiAnagrafici']['Contatti']['Fax'] = $this->getFax();
        }
        if(!empty($this->getEmail())){
            $array['DatiAnagrafici']['Contatti']['Email'] = $this->getEmail();
        }

        $array['DatiAnagrafici']['RiferimentoAmministrazione'] = null;
        if(!empty($this->getRiferimentoAmministrazione())){
            $array['DatiAnagrafici']['RiferimentoAmministrazione'] = $this->getRiferimentoAmministrazione();
        }

        return $array;
    }


}