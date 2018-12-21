<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         10:43
 */

namespace Advinser\FatturaElettronicaXml\Structures;


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


}