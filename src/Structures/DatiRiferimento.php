<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:22
 */

namespace Advinser\FatturaElettronicaXml\Structures;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class DatiRiferimento
{
    /**
     * @var null|string
     */
    private $RiferimentoNumeroLinea = null;
    /**
     * @var null|string
     */
    private $IdDocumento = null;
    /**
     * @var null|string
     */
    private $Data = null;
    /**
     * @var null|string
     */
    private $NumItem = null;
    /**
     * @var null|string
     */
    private $CodiceCommessaConvenzione = null;
    /**
     * @var null|string
     */
    private $CodiceCUP = null;
    /**
     * @var null|string
     */
    private $CodiceCIG = null;

    /**
     * @return null|string
     */
    public function getRiferimentoNumeroLinea(): ?string
    {
        return $this->RiferimentoNumeroLinea;
    }

    /**
     * @param null|string $RiferimentoNumeroLinea
     * @return DatiRiferimento
     */
    public function setRiferimentoNumeroLinea(?string $RiferimentoNumeroLinea): DatiRiferimento
    {
        $this->RiferimentoNumeroLinea = $RiferimentoNumeroLinea;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIdDocumento(): ?string
    {
        return $this->IdDocumento;
    }

    /**
     * @param null|string $IdDocumento
     * @return DatiRiferimento
     */
    public function setIdDocumento(?string $IdDocumento): DatiRiferimento
    {
        $this->IdDocumento = $IdDocumento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getData(): ?string
    {
        return $this->Data;
    }

    /**
     * @param null|string $Data
     * @return DatiRiferimento
     */
    public function setData(?string $Data): DatiRiferimento
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumItem(): ?string
    {
        return $this->NumItem;
    }

    /**
     * @param null|string $NumItem
     * @return DatiRiferimento
     */
    public function setNumItem(?string $NumItem): DatiRiferimento
    {
        $this->NumItem = $NumItem;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodiceCommessaConvenzione(): ?string
    {
        return $this->CodiceCommessaConvenzione;
    }

    /**
     * @param null|string $CodiceCommessaConvenzione
     * @return DatiRiferimento
     */
    public function setCodiceCommessaConvenzione(?string $CodiceCommessaConvenzione): DatiRiferimento
    {
        $this->CodiceCommessaConvenzione = $CodiceCommessaConvenzione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodiceCUP(): ?string
    {
        return $this->CodiceCUP;
    }

    /**
     * @param null|string $CodiceCUP
     * @return DatiRiferimento
     */
    public function setCodiceCUP(?string $CodiceCUP): DatiRiferimento
    {
        $this->CodiceCUP = $CodiceCUP;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodiceCIG(): ?string
    {
        return $this->CodiceCIG;
    }

    /**
     * @param null|string $CodiceCIG
     * @return DatiRiferimento
     */
    public function setCodiceCIG(?string $CodiceCIG): DatiRiferimento
    {
        $this->CodiceCIG = $CodiceCIG;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {

        $array = [
            'RiferimentoNumeroLinea' => $this->getRiferimentoNumeroLinea(),
            'IdDocumento' => $this->getIdDocumento(),
            'Data' => $this->getData(),
            'NumItem' => $this->getNumItem(),
            'CodiceCommessaConvenzione' => $this->getCodiceCommessaConvenzione(),
            'CodiceCUP' => $this->getCodiceCUP(),
            'CodiceCIG' => $this->getCodiceCIG()
        ];


        return $array;
    }

    /**
     * @param $array
     * @return DatiRiferimento
     */
    public static function fromArray($array): DatiRiferimento
    {
        $o = new DatiRiferimento();

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
        if (!empty($array['RiferimentoNumeroLinea'])) {
            if (!is_numeric($array['RiferimentoNumeroLinea'])) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'RiferimentoNumeroLinea' must be numeric", $tag . 'DatiRiferimento::01', __LINE__));
            } elseif ($array['RiferimentoNumeroLinea'] > 9999) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'RiferimentoNumeroLinea', length max is 4", $tag . 'DatiRiferimento::02', __LINE__));

            }
        }
        if (empty($array['IdDocumento'])) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "'IdDocumento' is missing", $tag . 'DatiRiferimento::03', __LINE__));
        } else {
            if (strlen($array['IdDocumento']) > 20) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'IdDocumento', length max is 20", $tag . 'DatiRiferimento::04', __LINE__));
            }
        }

        if (!empty($array['Data'])) {
            $dt = \DateTime::createFromFormat('Y-m-d', $array['Data']);
            if (!$dt instanceof \DateTime) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'Data' format must by YYYY-MM-DD", $tag . 'DatiRiferimento::05', __LINE__));

            }
        }
        if (!empty($array['NumItem'])) {
            if (strlen($array['NumItem']) > 20) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'NumItem', length max is 20", $tag . 'DatiRiferimento::06', __LINE__));
            }
        }
        if (!empty($array['CodiceCommessaConvenzione'])) {
            if (strlen($array['CodiceCommessaConvenzione']) > 20) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'CodiceCommessaConvenzione', length max is 100", $tag . 'DatiRiferimento::07', __LINE__));
            }
        }
        if (!empty($array['CodiceCUP'])) {
            if (strlen($array['CodiceCUP']) > 15) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'CodiceCUP', length max is 15", $tag . 'DatiRiferimento::08', __LINE__));
            }
        }
        if (!empty($array['CodiceCIG'])) {
            if (strlen($array['CodiceCIG']) > 15) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'CodiceCIG', length max is 15", $tag . 'DatiRiferimento::09', __LINE__));
            }
        }

    }
}