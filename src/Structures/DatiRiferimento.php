<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:22
 */

namespace FatturaElettronicaXml\Structures;


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


        return array_filter($array);
    }
}