<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         10:30
 */

namespace FatturaElettronicaXml\Structures;


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


}