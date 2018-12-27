<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:57
 */

namespace Advinser\FatturaElettronicaXml\Body;

use Advinser\FatturaElettronicaXml\AbsModels;
use Advinser\FatturaElettronicaXml\FatturaElettronicaException;

class FatturaElettronicaBody extends AbsModels
{
    /**
     * @var DatiGenerali|null
     */
    private $DatiGenerali;
    /**
     * @var DatiBeniServizi|null
     */
    private $DatiBeniServizi;
    /**
     * @var DatiVeicoli|null
     */
    private $DatiVeicoli = null;
    /**
     * @var DatiPagamento|null
     */
    private $DatiPagamento;
    /**
     * @var Allegati|null
     */
    private $Allegati = null;

    /**
     * @return DatiGenerali|null
     */
    public function getDatiGenerali(): ?DatiGenerali
    {
        return $this->DatiGenerali;
    }

    /**
     * @param DatiGenerali|null $DatiGenerali
     * @return FatturaElettronicaBody
     */
    public function setDatiGenerali(?DatiGenerali $DatiGenerali): FatturaElettronicaBody
    {
        $this->DatiGenerali = $DatiGenerali;
        return $this;
    }

    /**
     * @return DatiBeniServizi|null
     */
    public function getDatiBeniServizi(): ?DatiBeniServizi
    {
        return $this->DatiBeniServizi;
    }

    /**
     * @param DatiBeniServizi|null $DatiBeniServizi
     * @return FatturaElettronicaBody
     */
    public function setDatiBeniServizi(?DatiBeniServizi $DatiBeniServizi): FatturaElettronicaBody
    {
        $this->DatiBeniServizi = $DatiBeniServizi;
        return $this;
    }

    /**
     * @return DatiVeicoli|null
     */
    public function getDatiVeicoli(): ?DatiVeicoli
    {
        return $this->DatiVeicoli;
    }

    /**
     * @param DatiVeicoli|null $DatiVeicoli
     * @return FatturaElettronicaBody
     */
    public function setDatiVeicoli(?DatiVeicoli $DatiVeicoli): FatturaElettronicaBody
    {
        $this->DatiVeicoli = $DatiVeicoli;
        return $this;
    }

    /**
     * @return DatiPagamento|null
     */
    public function getDatiPagamento(): ?DatiPagamento
    {
        return $this->DatiPagamento;
    }

    /**
     * @param DatiPagamento|null $DatiPagamento
     * @return FatturaElettronicaBody
     */
    public function setDatiPagamento(?DatiPagamento $DatiPagamento): FatturaElettronicaBody
    {
        $this->DatiPagamento = $DatiPagamento;
        return $this;
    }

    /**
     * @return Allegati|null
     */
    public function getAllegati(): ?Allegati
    {
        return $this->Allegati;
    }

    /**
     * @param Allegati|null $Allegati
     * @return FatturaElettronicaBody
     */
    public function setAllegati(?Allegati $Allegati): FatturaElettronicaBody
    {
        $this->Allegati = $Allegati;
        return $this;
    }

    /**
     * @return array
     * @throws FatturaElettronicaException
     */
    public function toArray()
    {
        $array = [
            'DatiGenerali' => null,
            'DatiBeniServizi' => null,
            'DatiVeicoli' => null,
            'DatiPagamento' => null,
            'Allegati' => null,
        ];

        if (!$this->getDatiGenerali() instanceof DatiGenerali) {
            throw new FatturaElettronicaException("missing instance of 'DatiGenerali'", 'FatturaElettronicaBody');
        } else {
            $array['DatiGenerali'] = $this->getDatiGenerali()->toArray();
        }
        if (!$this->getDatiBeniServizi() instanceof DatiBeniServizi) {
            throw new FatturaElettronicaException("missing instance of 'DatiBeniServizi'", 'FatturaElettronicaBody');
        } else {
            $array['DatiBeniServizi'] = $this->getDatiBeniServizi()->toArray();
        }
        if ($this->getDatiVeicoli() instanceof DatiVeicoli) {
            $array['DatiVeicoli'] = $this->getDatiVeicoli()->toArray();
        }
        if (!empty($this->getDatiPagamento())) {
            if (!$this->getDatiPagamento() instanceof DatiPagamento) {
                throw new FatturaElettronicaException("missing instance of 'DatiPagamento'", 'FatturaElettronicaBody');
            } else {
                $array['DatiPagamento'] = $this->getDatiPagamento()->toArray();
            }
        }
        if ($this->getAllegati() instanceof Allegati) {
            $array['Allegati'] = $this->getAllegati()->toArray();
        }

        return $this->clean_array($array);

    }

    /**
     * @param array $array
     * @return FatturaElettronicaBody
     * @throws FatturaElettronicaException
     */
    public static function fromArray(array $array): FatturaElettronicaBody
    {
        $o = new FatturaElettronicaBody();

        if (!empty($array['DatiGenerali'])) {
            $o->setDatiGenerali(DatiGenerali::fromArray($array['DatiGenerali']));
        }
        if (!empty($array['DatiBeniServizi'])) {
            $o->setDatiBeniServizi(DatiBeniServizi::fromArray($array['DatiBeniServizi']));
        }
        if (!empty($array['DatiVeicoli'])) {
            $o->setDatiVeicoli(DatiVeicoli::fromArray($array['DatiVeicoli']));
        }
        if (!empty($array['DatiPagamento'])) {
            $o->setDatiPagamento(DatiPagamento::fromArray($array['DatiPagamento']));
        }
        if (!empty($array['Allegati'])) {
            $o->setAllegati(Allegati::fromArray($array['Allegati']));
        }
        return $o;
    }


}