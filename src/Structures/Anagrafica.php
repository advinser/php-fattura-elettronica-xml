<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         10:43
 */

namespace Advinser\FatturaElettronicaXml\Structures;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class Anagrafica
{
    /**
     * @var null| string
     */
    private $Denominazione = null;

    /**
     * @var null| string
     */
    private $Nome = null;
    /**
     * @var null| string
     */
    private $Cognome = null;
    /**
     * @var null| string
     */
    private $Titolo = null;

    /**
     * @var null| string
     */
    private $CodEORI = null;

    /**
     * Anagrafica constructor.
     * @param string|null $Denominazione
     * @param string|null $Nome
     * @param string|null $Cognome
     * @param string|null $Titolo
     * @param string|null $CodEORI
     */
    public function __construct(
        ?string $Denominazione = null,
        ?string $Nome = null,
        ?string $Cognome = null,
        ?string $Titolo = null,
        ?string $CodEORI = null
    )
    {
        $this->Denominazione = $Denominazione;
        $this->Nome = $Nome;
        $this->Cognome = $Cognome;
        $this->Titolo = $Titolo;
        $this->CodEORI = $CodEORI;
    }

    /**
     * @return null|string
     */
    public function getDenominazione(): ?string
    {
        return $this->Denominazione;
    }

    /**
     * @param null|string $Denominazione
     * @return Anagrafica
     */
    public function setDenominazione(?string $Denominazione): Anagrafica
    {
        $this->Denominazione = $Denominazione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNome(): ?string
    {
        return $this->Nome;
    }

    /**
     * @param null|string $Nome
     * @return Anagrafica
     */
    public function setNome(?string $Nome): Anagrafica
    {
        $this->Nome = $Nome;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCognome(): ?string
    {
        return $this->Cognome;
    }

    /**
     * @param null|string $Cognome
     * @return Anagrafica
     */
    public function setCognome(?string $Cognome): Anagrafica
    {
        $this->Cognome = $Cognome;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitolo(): ?string
    {
        return $this->Titolo;
    }

    /**
     * @param null|string $Titolo
     * @return Anagrafica
     */
    public function setTitolo(?string $Titolo): Anagrafica
    {
        $this->Titolo = $Titolo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodEORI(): ?string
    {
        return $this->CodEORI;
    }

    /**
     * @param null|string $CodEORI
     * @return Anagrafica
     */
    public function setCodEORI(?string $CodEORI): Anagrafica
    {
        $this->CodEORI = $CodEORI;
        return $this;
    }


    public function toArray()
    {
        //todo aggiungere validazione
        return [
            'Denominazione' => $this->getDenominazione(),
            'Nome' => $this->getNome(),
            'Cognome' => $this->getCognome(),
            'Titolo' => $this->getTitolo(),
            'CodEORI' => $this->getCodEORI(),
        ];
    }

    /**
     * @param $array
     * @return Anagrafica
     */
    public static function fromArray($array): Anagrafica
    {
        $o = new Anagrafica();

        foreach ($array as $k => $v) {
            $m = 'set' . $k;
            $o->{$m}($v);
        }

        return $o;
    }


    public static function validate($array, ValidateErrorContainer $errorContainer, $tag = '')
    {
        $empty = true;
        $denominazioneIsset = false;
        $nomeIsset = false;
        $cognomeIsset = false;
        $titoloIsset = false;

        if (!empty($array['Denominazione'])) {
            $denominazioneIsset = true;
            $empty = false;
            if(strlen($array['Denominazione']) > 80){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Denominazione', length max is 80", $tag . 'Anagrafica::04', __LINE__));
            }
        }

        if (!empty($array['Nome'])) {
            $nomeIsset = true;
            $empty = false;
            if(strlen($array['Nome']) > 60){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Nome', length max is 60", $tag . 'Anagrafica::05', __LINE__));
            }
        }

        if (!empty($array['Cognome'])) {
            $cognomeIsset = true;
            $empty = false;
            if(strlen($array['Cognome']) > 60){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Cognome', length max is 60", $tag . 'Anagrafica::06', __LINE__));
            }
        }

        if (!empty($array['Titolo'])) {
            $titoloIsset = true;
            $empty = false;
            $l = strlen($array['Titolo']);
            if($l > 10 || $l<2){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Titolo', length is wrong, must be between 2 and 10", $tag . 'Anagrafica::07', __LINE__));
            }
        }

        if (!empty($array['CodEORI'])) {
            $empty = false;
            $l = strlen($array['CodEORI']);
            if($l > 17 || $l<13){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'CodEORI', length is wrong, must be between 2 and 10", $tag . 'Anagrafica::08', __LINE__));
            }
        }

        if($empty){
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'ANAGRAFICA' IS WRONG OR EMPTY", $tag . 'Anagrafica::01', __LINE__));
        }

        if($denominazioneIsset && ($nomeIsset || $cognomeIsset)){
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Denominazione' can be used only if 'Nome' or 'Cognome' are not", $tag . 'Anagrafica::02', __LINE__));

        }

        if(!$denominazioneIsset && (!$nomeIsset || !$cognomeIsset)){
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'ANAGRAFICA', one of 'Denominazione' or 'Nome' and 'Cognome' must be used", $tag . 'Anagrafica::03', __LINE__));
        }

    }
}