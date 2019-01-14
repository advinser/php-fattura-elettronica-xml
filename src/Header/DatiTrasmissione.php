<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:06
 */

namespace Advinser\FatturaElettronicaXml\Header;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\FatturaElettronicaException;
use Advinser\FatturaElettronicaXml\Structures\Fiscale;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class DatiTrasmissione
{
    /**
     * @var Fiscale|null
     */
    private $IdTrasmittente;
    /**
     * @var string|null
     */
    private $ProgressivoInvio;
    /**
     * @var string|null
     */
    private $FormatoTrasmissione;
    /**
     * @var string
     */
    private $CodiceDestinatario = '';
    /**
     * @var string|null
     */
    private $Telefono;
    /**
     * @var string|null
     */
    private $Email;
    /**
     * @var string|null
     */
    private $PECDestinatario;

    /**
     * DatiTrasmissione constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return Fiscale|null
     */
    public function getIdTrasmittente(): ?Fiscale
    {
        return $this->IdTrasmittente;
    }

    /**
     * @param Fiscale $IdTrasmittente
     * @return DatiTrasmissione
     */
    public function setIdTrasmittente(Fiscale $IdTrasmittente): DatiTrasmissione
    {
        $this->IdTrasmittente = $IdTrasmittente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProgressivoInvio(): ?string
    {
        return $this->ProgressivoInvio;
    }

    /**
     * @param string $ProgressivoInvio
     * @return DatiTrasmissione
     */
    public function setProgressivoInvio(string $ProgressivoInvio): DatiTrasmissione
    {
        if (strlen($ProgressivoInvio) < 10) {
            $this->ProgressivoInvio = str_pad($ProgressivoInvio, 10, '0', STR_PAD_LEFT);
        } else {
            $this->ProgressivoInvio = $ProgressivoInvio;
        }
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormatoTrasmissione(): ?string
    {
        return $this->FormatoTrasmissione;
    }

    /**
     * @param string $FormatoTrasmissione
     * @return DatiTrasmissione
     * @throws FatturaElettronicaException
     */
    public function setFormatoTrasmissione(string $FormatoTrasmissione): DatiTrasmissione
    {
        switch ($FormatoTrasmissione) {
            case 'FPA12':
            case 'FPR12':
                $this->FormatoTrasmissione = $FormatoTrasmissione;
                break;
            default:
                throw new FatturaElettronicaException("Invalid 'FormatoTrasmissione', you provide '" . $FormatoTrasmissione . "', value can be FPA12 or FPR12");
                break;
        }
//        $this->controllaDestinatario();
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodiceDestinatario(): ?string
    {
        return $this->CodiceDestinatario;
    }

    /**
     * @param string $CodiceDestinatario
     * @return DatiTrasmissione
     */
    public function setCodiceDestinatario(string $CodiceDestinatario): DatiTrasmissione
    {
        $this->CodiceDestinatario = $CodiceDestinatario;
//        $this->controllaDestinatario();
        return $this;
    }

    /**
     * @throws FatturaElettronicaException
     */
    private function controllaDestinatario()
    {
        if(empty($this->CodiceDestinatario)){
            return;
        }
        if (empty($this->FormatoTrasmissione)) {
            if (strlen($this->CodiceDestinatario) != 6 || strlen($this->CodiceDestinatario) != 7) {
                throw new FatturaElettronicaException("Invalid length for 'CodiceDestinatario',
                    it must be between 6 and 7");
            }
        } else {
            if (($this->FormatoTrasmissione == 'FPA12' && strlen($this->CodiceDestinatario) != 6) ||
                ($this->FormatoTrasmissione == 'FPR12' && strlen($this->CodiceDestinatario) != 7)) {
                throw new FatturaElettronicaException("Invalid length for 'CodiceDestinatario', 
                    it must be 6 in case of FPA12 and 7 in case of FPR12");
            }
        }
    }

    /**
     * @return string|null
     */
    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    /**
     * @param string $Telefono
     * @return DatiTrasmissione
     */
    public function setTelefono(string $Telefono): DatiTrasmissione
    {
        $this->Telefono = $Telefono;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return DatiTrasmissione
     */
    public function setEmail(string $Email): DatiTrasmissione
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPECDestinatario(): ?string
    {
        return $this->PECDestinatario;
    }

    /**
     * @param string $PECDestinatario
     * @return DatiTrasmissione
     */
    public function setPECDestinatario(string $PECDestinatario): DatiTrasmissione
    {
        $this->PECDestinatario = $PECDestinatario;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [
            'IdTrasmittente' => null,
            'ProgressivoInvio' => $this->getProgressivoInvio(),
            'FormatoTrasmissione' => $this->getFormatoTrasmissione(),
            'CodiceDestinatario' => $this->getCodiceDestinatario(),
            'ContattiTrasmittente'=>null,
            'PECDestinatario' => $this->getPECDestinatario(),
        ];

        if ($this->getIdTrasmittente() instanceof Fiscale) {
            $array['IdTrasmittente'] = $this->getIdTrasmittente()->toArray();
        }

        if (!empty($this->getTelefono())) {
            $array['ContattiTrasmittente']['Telefono'] = $this->getTelefono();
        }
        if (!empty($this->getEmail())) {
            $array['ContattiTrasmittente']['Email'] = $this->getEmail();
        }

        return $array;
    }

    /**
     * @param array $array
     * @return DatiTrasmissione
     * @throws FatturaElettronicaException
     */
    public static function fromArray(array $array): DatiTrasmissione
    {
        $o = new DatiTrasmissione();

        if (!empty($array['IdTrasmittente'])) {
            $o->setIdTrasmittente(new Fiscale($array['IdTrasmittente']['IdPaese'], $array['IdTrasmittente']['IdCodice']));
        }

        if (!empty($array['ProgressivoInvio'])) {
            $o->setProgressivoInvio($array['ProgressivoInvio']);
        }
        if (!empty($array['FormatoTrasmissione'])) {
            $o->setFormatoTrasmissione($array['FormatoTrasmissione']);
        }
        if (!empty($array['CodiceDestinatario'])) {
            $o->setCodiceDestinatario($array['CodiceDestinatario']);
        }
        if (!empty($array['ContattiTrasmittente']['Telefono'])) {
            $o->setTelefono($array['CodiceDestinatario']['Telefono']);
        }
        if (!empty($array['ContattiTrasmittente']['Email'])) {
            $o->setEmail($array['CodiceDestinatario']['Email']);
        }
        if (!empty($array['PECDestinatario'])) {
            $o->setPECDestinatario($array['PECDestinatario']);
        }

        return $o;
    }

    public static function validate($array,ValidateErrorContainer $errorContainer){
        if(empty($array['IdTrasmittente'])){
            $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Missing 'IdTrasmittente'",'DatiTrasmissione::01',__LINE__));
        }else{
            Fiscale::validate($array['IdTrasmittente'],$errorContainer,'DatiTrasmissione::');
        }
        if(empty($array['ProgressivoInvio'])){
            $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Missing 'ProgressivoInvio'",'DatiTrasmissione::02',__LINE__));
        }else{
            $l = strlen($array['ProgressivoInvio']);
            if($l<1 || $l>10){
                $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_INVALID,"Invalid 'ProgressivoInvio', must be between 1 and 11 char length",'DatiTrasmissione::03',__LINE__));

            }
        }

        if(empty($array['FormatoTrasmissione'])){
            $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Missing 'FormatoTrasmissione'",'DatiTrasmissione::04',__LINE__));
        }else{
            if($array['FormatoTrasmissione'] != 'FPA12' && $array['FormatoTrasmissione']!='FPR12'){

                $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_INVALID,"Invalid 'FormatoTrasmissione', must be 'FPA12' or 'FPR12'",'DatiTrasmissione::05',__LINE__));

            }
        }

        if(empty($array['CodiceDestinatario'])){
            $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Missing 'CodiceDestinatario'",'DatiTrasmissione::06',__LINE__));
        }else{
            $l = (!empty($array['FormatoTrasmissione']) && $array['FormatoTrasmissione'] == 'FPR12') ? 7 : 6;
            if(strlen($array['CodiceDestinatario']) != $l){
                $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_INVALID,"Invalid 'CodiceDestinatario', must be of length $l",'DatiTrasmissione::07',__LINE__));
            }
        }

        if(!empty($array['ContattiTrasmittente']['Telefono'])){
            $l = strlen($array['ContattiTrasmittente']['Telefono']);
            if($l< 5 || $l > 12){
                $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_INVALID,"Invalid 'ContattiTrasmittente'::'Telefono', must be of length between 5 and 12",'DatiTrasmissione::08',__LINE__));
            }
        }

        if(!empty($array['ContattiTrasmittente']['Email'])){
            $l = strlen($array['ContattiTrasmittente']['Email']);
            if($l<7 || $l > 256){
                $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_INVALID,"Invalid 'ContattiTrasmittente'::'Email', must be of length between 7 and 256",'DatiTrasmissione::08',__LINE__));
            }
        }

        if(!empty($array['PECDestinatario'])){
            if(empty($array['CodiceDestinatario']) || $array['CodiceDestinatario'] != '0000000'){
                $errorContainer->addError(new ValidateError('',FatturaElettronica::ERROR_LEVEL_INVALID,"Invalid 'PECDestinatario', can be used only when 'CodiceDestinatario' is 0000000",'DatiTrasmissione::09',__LINE__));
            }
        }

    }

}