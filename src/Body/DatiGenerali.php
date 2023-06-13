<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:00
 */

namespace Advinser\FatturaElettronicaXml\Body;


use Advinser\FatturaElettronicaXml\FatturaElettronicaException;
use Advinser\FatturaElettronicaXml\Structures\DatiRiferimento;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class DatiGenerali
{
    /**
     * @var DatiGeneraliDocumento|null
     */
    private $DatiGeneraliDocumento;
    /**
     * @var DatiRiferimento[]|null
     */
    private $DatiOrdineAcquisto;
    /**
     * @var DatiRiferimento|null
     */
    private $DatiContratto;

    /**
     * @var DatiRiferimento|null
     */
    private $DatiConvenzione;

    /**
     * @var DatiRiferimento|null
     */
    private $DatiRicezione;

    /**
     * @var DatiRiferimento|null
     */
    private $DatiFattureCollegate;

    /**
     * @var null|string
     */
    private $RiferimentoFase = null;

    /**
     * @var DatiDDT[] | null
     */
    private $DatiDDT;

    /**
     * @var DatiTrasporto|null
     */
    private $DatiTrasporto;

    /**
     * @var string|null
     */
    private $NumeroFatturaPrincipale;

    /**
     * @var string|null
     */
    private $DataFatturaPrincipale;

    /**
     * @return DatiDDT[]|null
     */
    public function getDatiDDT(): ?array
    {
        return $this->DatiDDT;
    }

    /**
     * @param DatiDDT[]|null $datiDDT
     * @return DatiDDT
     */
    public function setDatiDDT(?array $datiDDT): DatiGenerali
    {
        $this->DatiDDT = $datiDDT;
        return $this;
    }

    /**
     * @param DatiDDT $datiDDT
     * @return DatiGenerali
     */
    public function addDatiDDT(DatiDDT $datiDDT): DatiGenerali
    {
        $this->DatiDDT[] = $datiDDT;
        return $this;
    }

    /**
     * @return DatiGeneraliDocumento|null
     */
    public function getDatiGeneraliDocumento(): ?DatiGeneraliDocumento
    {
        return $this->DatiGeneraliDocumento;
    }

    /**
     * @param DatiGeneraliDocumento|null $DatiGeneraliDocumento
     * @return DatiGenerali
     */
    public function setDatiGeneraliDocumento(?DatiGeneraliDocumento $DatiGeneraliDocumento): DatiGenerali
    {
        $this->DatiGeneraliDocumento = $DatiGeneraliDocumento;
        return $this;
    }


    /**
     * @return DatiRiferimento[]|null
     */
    public function getDatiOrdineAcquisto(): ?array
    {
        return $this->DatiOrdineAcquisto;
    }

    /**
     * @param DatiRiferimento[] $DatiOrdineAcquisto
     * @return DatiGenerali
     */
    public function setDatiOrdineAcquisto(array $DatiOrdineAcquisto): DatiGenerali
    {
        $this->DatiOrdineAcquisto = $DatiOrdineAcquisto;
        return $this;
    }

    /**
     * @param DatiRiferimento|null $DatiOrdineAcquisto
     * @return DatiGenerali
     */
    public function addDatiOrdineAcquisto(?DatiRiferimento $DatiOrdineAcquisto): DatiGenerali
    {
        $this->DatiOrdineAcquisto[] = $DatiOrdineAcquisto;
        return $this;
    }

    /**
     * @return DatiRiferimento|null
     */
    public function getDatiContratto(): ?DatiRiferimento
    {
        return $this->DatiContratto;
    }

    /**
     * @param DatiRiferimento|null $DatiContratto
     * @return DatiGenerali
     */
    public function setDatiContratto(?DatiRiferimento $DatiContratto): DatiGenerali
    {
        $this->DatiContratto = $DatiContratto;
        return $this;
    }

    /**
     * @return DatiRiferimento|null
     */
    public function getDatiConvenzione(): ?DatiRiferimento
    {
        return $this->DatiConvenzione;
    }

    /**
     * @param DatiRiferimento|null $DatiConvenzione
     * @return DatiGenerali
     */
    public function setDatiConvenzione(?DatiRiferimento $DatiConvenzione): DatiGenerali
    {
        $this->DatiConvenzione = $DatiConvenzione;
        return $this;
    }

    /**
     * @return DatiRiferimento|null
     */
    public function getDatiRicezione(): ?DatiRiferimento
    {
        return $this->DatiRicezione;
    }

    /**
     * @param DatiRiferimento|null $DatiRicezione
     * @return DatiGenerali
     */
    public function setDatiRicezione(?DatiRiferimento $DatiRicezione): DatiGenerali
    {
        $this->DatiRicezione = $DatiRicezione;
        return $this;
    }

    /**
     * @return DatiRiferimento|null
     */
    public function getDatiFattureCollegate(): ?DatiRiferimento
    {
        return $this->DatiFattureCollegate;
    }

    /**
     * @param DatiRiferimento|null $DatiFattureCollegate
     * @return DatiGenerali
     */
    public function setDatiFattureCollegate(?DatiRiferimento $DatiFattureCollegate): DatiGenerali
    {
        $this->DatiFattureCollegate = $DatiFattureCollegate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRiferimentoFase(): ?string
    {
        return $this->RiferimentoFase;
    }

    /**
     * @param null|string $RiferimentoFase
     * @return DatiGenerali
     */
    public function setRiferimentoFase(?string $RiferimentoFase): DatiGenerali
    {
        $this->RiferimentoFase = $RiferimentoFase;
        return $this;
    }

    /**
     * @return DatiTrasporto|null
     */
    public function getDatiTrasporto(): ?DatiTrasporto
    {
        return $this->DatiTrasporto;
    }

    /**
     * @param DatiTrasporto|null $DatiTrasporto
     * @return DatiGenerali
     */
    public function setDatiTrasporto(?DatiTrasporto $DatiTrasporto): DatiGenerali
    {
        $this->DatiTrasporto = $DatiTrasporto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumeroFatturaPrincipale(): ?string
    {
        return $this->NumeroFatturaPrincipale;
    }

    /**
     * @param null|string $NumeroFatturaPrincipale
     * @return DatiGenerali
     */
    public function setNumeroFatturaPrincipale(?string $NumeroFatturaPrincipale): DatiGenerali
    {
        $this->NumeroFatturaPrincipale = $NumeroFatturaPrincipale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataFatturaPrincipale(): ?string
    {
        return $this->DataFatturaPrincipale;
    }

    /**
     * @param null|string $DataFatturaPrincipale
     * @return DatiGenerali
     */
    public function setDataFatturaPrincipale(?string $DataFatturaPrincipale): DatiGenerali
    {
        $this->DataFatturaPrincipale = $DataFatturaPrincipale;
        return $this;
    }


    /**
     * @return array
     * @throws FatturaElettronicaException
     */
    public function toArray()
    {

        $array = [
            'DatiGeneraliDocumento' => null,
            'DatiOrdineAcquisto' => null,
            'DatiContratto' => null,
            'DatiConvenzione' => null,
            'DatiRicezione' => null,
            'DatiFattureCollegate' => null,
            'DatiSAL' => null,
            'DatiDDT' => null,
            'DatiTrasporto' => null,
            'FatturaPrincipale' => null,
        ];

        if (!$this->getDatiGeneraliDocumento() instanceof DatiGeneraliDocumento) {
            throw new FatturaElettronicaException("missing instance of 'DatiGeneraliDocumento'", 'FatturaElettronicaBody->DatiGenerali');
        } else {
            $array['DatiGeneraliDocumento'] = $this->getDatiGeneraliDocumento()->toArray();
            //todo controllare se toarray è vuoto
        }

        if (!empty($this->getDatiOrdineAcquisto())) {
            foreach ($this->getDatiOrdineAcquisto() as $ordineAcquisto) {
                $array['DatiOrdineAcquisto'][] = $ordineAcquisto->toArray();
            }
        }

        if ($this->getDatiContratto() instanceof DatiRiferimento) {
            $array['DatiContratto'] = $this->getDatiContratto()->toArray();
        }

        if ($this->getDatiConvenzione() instanceof DatiRiferimento) {
            $array['DatiConvenzione'] = $this->getDatiConvenzione()->toArray();
        }

        if ($this->getDatiRicezione() instanceof DatiRiferimento) {
            $array['DatiRicezione'] = $this->getDatiRicezione()->toArray();
        }

        if ($this->getDatiFattureCollegate() instanceof DatiRiferimento) {
            $array['DatiFattureCollegate'] = $this->getDatiFattureCollegate()->toArray();
        }

        if (!empty($this->getRiferimentoFase())) {
            $array['DatiSAL']['RiferimentoFase'] = $this->getRiferimentoFase();
        }

        if (!empty($this->getDatiDDT())) {
            if (count($this->getDatiDDT()) === 1) {
                $array['DatiDDT'] = $this->getDatiDDT()[0]->toArray();
            } else {
                $a = [];
                foreach ($this->getDatiDDT() as $DatiDDT) {
                    $a[] = $DatiDDT->toArray();
                }
                $array['DatiDDT'] = $a;
            }
        }

        if ($this->getDatiTrasporto() instanceof DatiTrasporto) {
            $array['DatiTrasporto'] = $this->getDatiTrasporto()->toArray();
        }

        if (!empty($this->getNumeroFatturaPrincipale())) {
            $array['FatturaPrincipale']['NumeroFatturaPrincipale'] = $this->getNumeroFatturaPrincipale();
        }
        if (!empty($this->getNumeroFatturaPrincipale())) {
            $array['FatturaPrincipale']['DataFatturaPrincipale'] = $this->getDataFatturaPrincipale();
        }

        return $array;
    }

    /**
     * @param array $array
     * @return DatiGenerali
     */
    public static function fromArray(array $array): DatiGenerali
    {
        $o = new DatiGenerali();
        if (!empty($array['DatiGeneraliDocumento'])) {
            $o->setDatiGeneraliDocumento(DatiGeneraliDocumento::fromArray($array['DatiGeneraliDocumento']));
        }
        if (!empty($array['DatiOrdineAcquisto'])) {
            foreach ($array['DatiOrdineAcquisto'] as $datiOrdineAcquisto) {
                $o->addDatiOrdineAcquisto(DatiRiferimento::fromArray($datiOrdineAcquisto));
            }
        }
        if (!empty($array['DatiContratto'])) {
            $o->setDatiContratto(DatiRiferimento::fromArray($array['DatiContratto']));
        }
        if (!empty($array['DatiConvenzione'])) {
            $o->setDatiConvenzione(DatiRiferimento::fromArray($array['DatiConvenzione']));
        }
        if (!empty($array['DatiRicezione'])) {
            $o->setDatiRicezione(DatiRiferimento::fromArray($array['DatiRicezione']));
        }
        if (!empty($array['DatiFattureCollegate'])) {
            $o->setDatiFattureCollegate(DatiRiferimento::fromArray($array['DatiFattureCollegate']));
        }

        if (!empty($array['DatiSAL']['RiferimentoFase'])) {
            $o->setRiferimentoFase($array['DatiSAL']['RiferimentoFase']);
        }

        if (isset($array['DatiDDT'])) {
            if (isset($array['DatiDDT'][0])) {
                foreach ($array['DatiDDT'] as $item) {
                    $o->addDatiDDT(DatiDDT::fromArray($item));
                }
            } else {
                $o->addDatiDDT(DatiDDT::fromArray($array['DatiDDT']));
            }
        }

        if (!empty($array['DatiTrasporto'])) {
            $o->setDatiTrasporto(DatiTrasporto::fromArray($array['DatiTrasporto']));
        }

        if (!empty($array['FatturaPrincipale']['NumeroFatturaPrincipale'])) {
            $o->setNumeroFatturaPrincipale($array['FatturaPrincipale']['NumeroFatturaPrincipale']);
        }
        if (!empty($array['FatturaPrincipale']['DataFatturaPrincipale'])) {
            $o->setDataFatturaPrincipale($array['FatturaPrincipale']['DataFatturaPrincipale']);
        }

        return $o;

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
