<?php

namespace Advinser\FatturaElettronicaXml\Body;

use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class DatiDDT
{
    /**
     * @var null|string
     */
    private $NumeroDDT = null;
    /**
     * @var null|string
     */
    private $DataDDT = null;
    /**
     * @var null|string
     */
    private $RiferimentoNumeroLinea = null;

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'NumeroDDT' => $this->getNumeroDDT(),
            'DataDDT' => $this->getDataDDT(),
            'RiferimentoNumeroLinea' => $this->getRiferimentoNumeroLinea(),
        ];
    }

    public static function fromArray(array $array): DatiDDT
    {
        $o = new DatiDDT();

        if (isset($array['NumeroDDT'])) {
            $o->setNumeroDDT($array['NumeroDDT']);
        }

        if (isset($array['DataDDT'])) {
            $o->setDataDDT($array['DataDDT']);
        }

        if (isset($array['RiferimentoNumeroLinea'])) {
            $o->setRiferimentoNumeroLinea($array['RiferimentoNumeroLinea']);
        }

        return $o;
    }

    /**
     * @return null|string
     */
    public function getNumeroDDT(): ?string
    {
        return $this->NumeroDDT;
    }

    /**
     * @param null|string $NumeroDDT
     * @return DatiGenerali
     */
    public function setNumeroDDT(?string $NumeroDDT): DatiDDT
    {
        $this->NumeroDDT = $NumeroDDT;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataDDT(): ?string
    {
        return $this->DataDDT;
    }

    /**
     * @param null|string $DataDDT
     * @return DatiGenerali
     */
    public function setDataDDT(?string $DataDDT): DatiDDT
    {
        $this->DataDDT = $DataDDT;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRiferimentoNumeroLinea(): ?string
    {
        return $this->RiferimentoNumeroLinea;
    }

    /**
     * @param null|string $RiferimentoNumeroLinea
     * @return DatiGenerali
     */
    public function setRiferimentoNumeroLinea(?string $RiferimentoNumeroLinea): DatiDDT
    {
        $this->RiferimentoNumeroLinea = $RiferimentoNumeroLinea;
        return $this;
    }

    /**
     * @param array $array
     * @param ValidateErrorContainer $errorContainer
     * @param string $tag
     */
    public static function validate(array $array, ValidateErrorContainer $errorContainer, $tag = '')
    {
        //todo validation

    }
}
