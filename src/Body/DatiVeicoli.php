<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:01
 */

namespace FatturaElettronicaXml\Body;


class DatiVeicoli
{
    /**
     * @var string|null
     */
    private $Data;
    /**
     * @var string|null
     */
    private $TotalePercorso;

    /**
     * @return null|string
     */
    public function getData(): ?string
    {
        return $this->Data;
    }

    /**
     * @param null|string $Data
     * @return DatiVeicoli
     */
    public function setData(?string $Data): DatiVeicoli
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTotalePercorso(): ?string
    {
        return $this->TotalePercorso;
    }

    /**
     * @param null|string $TotalePercorso
     * @return DatiVeicoli
     */
    public function setTotalePercorso(?string $TotalePercorso): DatiVeicoli
    {
        $this->TotalePercorso = $TotalePercorso;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array=[
            'Data'=>$this->getData(),
            'TotalePercorso'=>$this->getTotalePercorso(),
        ];

        return $array;
    }

}