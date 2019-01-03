<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         10:30
 */

namespace Advinser\FatturaElettronicaXml\Structures;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class Indirizzo
{
    /**
     * @var string|null
     */
    private $Indirizzo = null;
    /**
     * @var string|null
     */
    private $NumeroCivico = null;
    /**
     * @var string|null
     */
    private $CAP = null;
    /**
     * @var string|null
     */
    private $Comune = null;
    /**
     * @var string|null
     */
    private $Provincia = null;
    /**
     * @var string|null
     */
    private $Nazione = null;

    /**
     * Indirizzo constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getIndirizzo(): ?string
    {
        return $this->Indirizzo;
    }

    /**
     * @param null|string $Indirizzo
     * @return Indirizzo
     */
    public function setIndirizzo(?string $Indirizzo): Indirizzo
    {
        $this->Indirizzo = $Indirizzo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumeroCivico(): ?string
    {
        return $this->NumeroCivico;
    }

    /**
     * @param null|string $NumeroCivico
     * @return Indirizzo
     */
    public function setNumeroCivico(?string $NumeroCivico): Indirizzo
    {
        $this->NumeroCivico = $NumeroCivico;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCAP(): ?string
    {
        return $this->CAP;
    }

    /**
     * @param null|string $CAP
     * @return Indirizzo
     */
    public function setCAP(?string $CAP): Indirizzo
    {
        $this->CAP = $CAP;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getComune(): ?string
    {
        return $this->Comune;
    }

    /**
     * @param null|string $Comune
     * @return Indirizzo
     */
    public function setComune(?string $Comune): Indirizzo
    {
        $this->Comune = $Comune;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }

    /**
     * @param null|string $Provincia
     * @return Indirizzo
     */
    public function setProvincia(?string $Provincia): Indirizzo
    {
        $this->Provincia = $Provincia;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNazione(): ?string
    {
        return $this->Nazione;
    }

    /**
     * @param null|string $Nazione
     * @return Indirizzo
     */
    public function setNazione(?string $Nazione): Indirizzo
    {
        $this->Nazione = $Nazione;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return
            [
                'Indirizzo' => $this->getIndirizzo(),
                'NumeroCivico' => $this->getNumeroCivico(),
                'CAP' => $this->getCAP(),
                'Comune' => $this->getComune(),
                'Provincia' => $this->getProvincia(),
                'Nazione' => $this->getNazione()
            ];
    }

    /**
     * @param $array
     * @return Indirizzo
     */
    public static function fromArray($array): Indirizzo
    {
        $o = new Indirizzo();

        foreach ($array as $k => $v) {
            $m = 'set' . $k;
            $o->{$m}($v);
        }

        return $o;
    }

    /**
     * @param $array
     * @param ValidateErrorContainer $errorContainer
     * @param string $tag
     */
    public static function validate($array, ValidateErrorContainer $errorContainer, $tag = '')
    {

        if (empty($array['Indirizzo'])) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'Indirizzo'", $tag . 'GIndirizzo::01', __LINE__));
        } else {
            $l = strlen($array['Indirizzo']);
            if ($l > 60) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Indirizzo' length max is 60", $tag . 'GIndirizzo::02', __LINE__));
            }
        }
        if (!empty($array['NumeroCivico'])) {
            $l = strlen($array['NumeroCivico']);
            if ($l > 8) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'NumeroCivico' length max is 8", $tag . 'GIndirizzo::03', __LINE__));
            }
        }

        if (empty($array['CAP'])) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'CAP'", $tag . 'GIndirizzo::04', __LINE__));
        } else {
            $l = strlen($array['CAP']);
            if ($l > 5) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'CAP' length max is 5", $tag . 'GIndirizzo::05', __LINE__));
            }
        }

        if (empty($array['Comune'])) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'Comune'", $tag . 'GIndirizzo::06', __LINE__));
        } else {
            $l = strlen($array['Comune']);
            if ($l > 60) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Comune' length max is 60", $tag . 'GIndirizzo::07', __LINE__));
            }
        }

        $provinciaIsset = false;
        if (!empty($array['Provincia'])) {
            $provinciaIsset = true;
            $l = strlen($array['Provincia']);
            if ($l > 2) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Provincia' length max is 2", $tag . 'GIndirizzo::08', __LINE__));
            }
        }
        $nazioneIt = false;

        if (empty($array['Nazione'])) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'Nazione'", $tag . 'GIndirizzo::09', __LINE__));
        } else {
            $l = strlen($array['Nazione']);
            if ($l > 2) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Nazione' length max is 2", $tag . 'GIndirizzo::10', __LINE__));
            }
            if ($array['Nazione'] == 'IT') {
                $nazioneIt = true;
            }
        }

        if ($nazioneIt && !$provinciaIsset) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'Provincia', must be used when 'Nazione' is 'IT'", $tag . 'GIndirizzo::11', __LINE__));
        }


    }


}