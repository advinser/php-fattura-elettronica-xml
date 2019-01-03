<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         17:20
 */

namespace Advinser\FatturaElettronicaXml\Body;


use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class DettaglioLinea
{
    /**
     * @var int|null
     */
    private $NumeroLinea;
    /**
     * @var string|null
     */
    private $TipoCessionePrestazione;
    /**
     * @var string|null
     */
    private $CodiceTipo;
    /**
     * @var string|null
     */
    private $CodiceValore;
    /**
     * @var string|null
     */
    private $Descrizione;
    /**
     * @var string|null
     */
    private $Quantita;
    /**
     * @var string|null
     */
    private $UnitaMisura;
    /**
     * @var string|null
     */
    private $DataInizioPeriodo;
    /**
     * @var string|null
     */
    private $DataFinePeriodo;
    /**
     * @var string|null
     */
    private $PrezzoUnitario;
    /**
     * @var string|null
     */
    private $ScontoTipo;
    /**
     * @var string|null
     */
    private $ScontoPercentuale;
    /**
     * @var string|null
     */
    private $ScontoImporto;
    /**
     * @var string|null
     */
    private $PrezzoTotale;
    /**
     * @var string|null
     */
    private $AliquotaIVA;
    /**
     * @var string|null
     */
    private $Ritenuta;
    /**
     * @var string|null
     */
    private $Natura;
    /**
     * @var string|null
     */
    private $RiferimentoAmministrazione;
    /**
     * @var string|null
     */
    private $TipoDato;
    /**
     * @var string|null
     */
    private $RiferimentoTesto;
    /**
     * @var string|null
     */
    private $RiferimentoNumero;
    /**
     * @var string|null
     */
    private $RiferimentoData;

    /**
     * @return int|null
     */
    public function getNumeroLinea(): ?int
    {
        return $this->NumeroLinea;
    }

    /**
     * @param int|null $NumeroLinea
     * @return DettaglioLinea
     */
    public function setNumeroLinea(?int $NumeroLinea): DettaglioLinea
    {
        $this->NumeroLinea = $NumeroLinea;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoCessionePrestazione(): ?string
    {
        return $this->TipoCessionePrestazione;
    }

    /**
     * @param string|null $TipoCessionePrestazione
     * @return DettaglioLinea
     */
    public function setTipoCessionePrestazione(?string $TipoCessionePrestazione): DettaglioLinea
    {
        $this->TipoCessionePrestazione = $TipoCessionePrestazione;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodiceTipo(): ?string
    {
        return $this->CodiceTipo;
    }

    /**
     * @param string|null $CodiceTipo
     * @return DettaglioLinea
     */
    public function setCodiceTipo(?string $CodiceTipo): DettaglioLinea
    {
        $this->CodiceTipo = $CodiceTipo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodiceValore(): ?string
    {
        return $this->CodiceValore;
    }

    /**
     * @param string|null $CodiceValore
     * @return DettaglioLinea
     */
    public function setCodiceValore(?string $CodiceValore): DettaglioLinea
    {
        $this->CodiceValore = $CodiceValore;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescrizione(): ?string
    {
        return $this->Descrizione;
    }

    /**
     * @param string|null $Descrizione
     * @return DettaglioLinea
     */
    public function setDescrizione(?string $Descrizione): DettaglioLinea
    {
        $this->Descrizione = $Descrizione;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuantita(): ?string
    {
        return $this->Quantita;
    }

    /**
     * @param float|null $Quantita
     * @param int $precision
     * @return DettaglioLinea
     */
    public function setQuantita(?float $Quantita, int $precision = 8): DettaglioLinea
    {
        $this->Quantita = number_format($Quantita, $precision, '.', '');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitaMisura(): ?string
    {
        return $this->UnitaMisura;
    }

    /**
     * @param string|null $UnitaMisura
     * @return DettaglioLinea
     */
    public function setUnitaMisura(?string $UnitaMisura): DettaglioLinea
    {
        $this->UnitaMisura = $UnitaMisura;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataInizioPeriodo(): ?string
    {
        return $this->DataInizioPeriodo;
    }

    /**
     * @param string|null $DataInizioPeriodo
     * @return DettaglioLinea
     */
    public function setDataInizioPeriodo(?string $DataInizioPeriodo): DettaglioLinea
    {
        $this->DataInizioPeriodo = $DataInizioPeriodo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataFinePeriodo(): ?string
    {
        return $this->DataFinePeriodo;
    }

    /**
     * @param string|null $DataFinePeriodo
     * @return DettaglioLinea
     */
    public function setDataFinePeriodo(?string $DataFinePeriodo): DettaglioLinea
    {
        $this->DataFinePeriodo = $DataFinePeriodo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrezzoUnitario(): ?string
    {
        return $this->PrezzoUnitario;
    }

    /**
     * @param float|null $PrezzoUnitario
     * @param int $Precision
     * @return DettaglioLinea
     */
    public function setPrezzoUnitario(?float $PrezzoUnitario, int $Precision = 8): DettaglioLinea
    {
        $this->PrezzoUnitario = number_format($PrezzoUnitario, $Precision, '.', '');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScontoTipo(): ?string
    {
        return $this->ScontoTipo;
    }

    /**
     * @param string|null $ScontoTipo
     * @return DettaglioLinea
     */
    public function setScontoTipo(?string $ScontoTipo): DettaglioLinea
    {
        $this->ScontoTipo = $ScontoTipo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScontoPercentuale(): ?string
    {
        return $this->ScontoPercentuale;
    }

    /**
     * @param float|null $ScontoPercentuale
     * @return DettaglioLinea
     */
    public function setScontoPercentuale(?float $ScontoPercentuale): DettaglioLinea
    {
        $this->ScontoPercentuale = number_format($ScontoPercentuale, 2, '.', '');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScontoImporto(): ?string
    {
        return $this->ScontoImporto;
    }

    /**
     * @param float|null $ScontoImporto
     * @return DettaglioLinea
     */
    public function setScontoImporto(?float $ScontoImporto): DettaglioLinea
    {
        $this->ScontoImporto = number_format($ScontoImporto, 2, '.', '');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrezzoTotale(): ?string
    {
        return $this->PrezzoTotale;
    }

    /**
     * @param float|null $PrezzoTotale
     * @param int $Precision
     * @return DettaglioLinea
     */
    public function setPrezzoTotale(?float $PrezzoTotale, int $Precision = 8): DettaglioLinea
    {
        $this->PrezzoTotale = number_format($PrezzoTotale, $Precision, '.', '');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAliquotaIVA(): ?string
    {
        return $this->AliquotaIVA;
    }

    /**
     * @param float|null $AliquotaIVA
     * @return DettaglioLinea
     */
    public function setAliquotaIVA(?float $AliquotaIVA): DettaglioLinea
    {
        $this->AliquotaIVA = number_format($AliquotaIVA, 2, '.', '');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRitenuta(): ?string
    {
        return $this->Ritenuta;
    }

    /**
     * @param string|null $Ritenuta
     * @return DettaglioLinea
     */
    public function setRitenuta(?string $Ritenuta): DettaglioLinea
    {
        $this->Ritenuta = $Ritenuta;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNatura(): ?string
    {
        return $this->Natura;
    }

    /**
     * @param string|null $Natura
     * @return DettaglioLinea
     */
    public function setNatura(?string $Natura): DettaglioLinea
    {
        $this->Natura = $Natura;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRiferimentoAmministrazione(): ?string
    {
        return $this->RiferimentoAmministrazione;
    }

    /**
     * @param string|null $RiferimentoAmministrazione
     * @return DettaglioLinea
     */
    public function setRiferimentoAmministrazione(?string $RiferimentoAmministrazione): DettaglioLinea
    {
        $this->RiferimentoAmministrazione = $RiferimentoAmministrazione;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoDato(): ?string
    {
        return $this->TipoDato;
    }

    /**
     * @param string|null $TipoDato
     * @return DettaglioLinea
     */
    public function setTipoDato(?string $TipoDato): DettaglioLinea
    {
        $this->TipoDato = $TipoDato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRiferimentoTesto(): ?string
    {
        return $this->RiferimentoTesto;
    }

    /**
     * @param string|null $RiferimentoTesto
     * @return DettaglioLinea
     */
    public function setRiferimentoTesto(?string $RiferimentoTesto): DettaglioLinea
    {
        $this->RiferimentoTesto = $RiferimentoTesto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRiferimentoNumero(): ?string
    {
        return $this->RiferimentoNumero;
    }

    /**
     * @param string|null $RiferimentoNumero
     * @return DettaglioLinea
     */
    public function setRiferimentoNumero(?string $RiferimentoNumero): DettaglioLinea
    {
        $this->RiferimentoNumero = $RiferimentoNumero;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRiferimentoData(): ?string
    {
        return $this->RiferimentoData;
    }

    /**
     * @param string|null $RiferimentoData
     * @return DettaglioLinea
     */
    public function setRiferimentoData(?string $RiferimentoData): DettaglioLinea
    {
        $this->RiferimentoData = $RiferimentoData;
        return $this;
    }

    public function toArray()
    {
        //todo aggiungere validazione
        $array = [
            'NumeroLinea' => $this->getNumeroLinea(),
            'TipoCessionePrestazione' => $this->getTipoCessionePrestazione(),
            'CodiceArticolo' => null,
            'Descrizione' => $this->getDescrizione(),
            'Quantita' => !empty($this->getQuantita()) ? $this->getQuantita() : null,
            'UnitaMisura' => $this->getUnitaMisura(),
            'DataInizioPeriodo' => $this->getDataInizioPeriodo(),
            'DataFinePeriodo' => $this->getDataFinePeriodo(),
            'PrezzoUnitario' => !empty($this->getPrezzoUnitario()) ? $this->getPrezzoUnitario() : null,
            'ScontoMaggiorazione' => null,
            'PrezzoTotale' => !empty($this->getPrezzoTotale()) ? $this->getPrezzoTotale() : null,
            'AliquotaIVA' => !empty($this->getAliquotaIVA()) ? $this->getAliquotaIVA() : null,
            'Ritenuta' => $this->getRitenuta(),
            'Natura' => $this->getNatura(),
            'RiferimentoAmministrazione' => $this->getRiferimentoAmministrazione(),
            'AltriDatiGestionali' => [
                'TipoDato' => null,
                'RiferimentoTesto' => null,
                'RiferimentoNumero' => null,
                'RiferimentoData' => null,
            ]
        ];

        if (!empty($this->getCodiceTipo())) {
            $array['CodiceArticolo']['CodiceTipo'] = $this->getCodiceTipo();
        }
        if (!empty($this->getCodiceValore())) {
            $array['CodiceArticolo']['CodiceValore'] = $this->getCodiceValore();
        }
        if (!empty($this->getScontoTipo())) {
            $array['ScontoMaggiorazione']['Tipo'] = $this->getScontoTipo();
        }
        if (!empty($this->getScontoPercentuale())) {
            $array['ScontoMaggiorazione']['Percentuale'] = $this->getScontoPercentuale();
        }
        if (!empty($this->getScontoImporto())) {
            $array['ScontoMaggiorazione']['Importo'] = $this->getScontoImporto();
        }
        if (!empty($this->getTipoDato())) {
            $array['AltriDatiGestionali']['TipoDato'] = $this->getTipoDato();
        }
        if (!empty($this->getRiferimentoTesto())) {
            $array['AltriDatiGestionali']['RiferimentoTesto'] = $this->getRiferimentoTesto();
        }
        if (!empty($this->getRiferimentoNumero())) {
            $array['AltriDatiGestionali']['RiferimentoNumero'] = $this->getRiferimentoNumero();
        }
        if (!empty($this->getRiferimentoData())) {
            $array['AltriDatiGestionali']['RiferimentoData'] = $this->getRiferimentoData();
        }

        return $array;
    }

    /**
     * @param array $array
     * @return DettaglioLinea
     */
    public static function fromArray(array $array): DettaglioLinea
    {
        $o = new DettaglioLinea();

        if (isset($array['NumeroLinea'])) {
            $o->setNumeroLinea($array['NumeroLinea']);
        }
        if (isset($array['TipoCessionePrestazione'])) {
            $o->setTipoCessionePrestazione($array['TipoCessionePrestazione']);
        }
        if (isset($array['Descrizione'])) {
            $o->setDescrizione($array['Descrizione']);
        }
        if (isset($array['Quantita'])) {
            $o->setQuantita($array['Quantita']);
        }
        if (isset($array['UnitaMisura'])) {
            $o->setUnitaMisura($array['UnitaMisura']);
        }
        if (isset($array['DataInizioPeriodo'])) {
            $o->setDataInizioPeriodo($array['DataInizioPeriodo']);
        }
        if (isset($array['DataFinePeriodo'])) {
            $o->setDataFinePeriodo($array['DataFinePeriodo']);
        }
        if (isset($array['PrezzoUnitario'])) {
            $o->setPrezzoUnitario($array['PrezzoUnitario']);
        }
        if (isset($array['PrezzoTotale'])) {
            $o->setPrezzoTotale($array['PrezzoTotale']);
        }
        if (isset($array['AliquotaIVA'])) {
            $o->setAliquotaIVA($array['AliquotaIVA']);
        }
        if (isset($array['Ritenuta'])) {
            $o->setRitenuta($array['Ritenuta']);
        }
        if (isset($array['Natura'])) {
            $o->setNatura($array['Natura']);
        }
        if (isset($array['RiferimentoAmministrazione'])) {
            $o->setRiferimentoAmministrazione($array['RiferimentoAmministrazione']);
        }

        if (!empty($array['CodiceArticolo']['CodiceTipo'])) {
            $o->setCodiceTipo($array['CodiceArticolo']['CodiceTipo']);
        }
        if (!empty($array['CodiceArticolo']['CodiceValore'])) {
            $o->setCodiceValore($array['CodiceArticolo']['CodiceValore']);
        }
        if (!empty($array['ScontoMaggiorazione']['Tipo'])) {
            $o->setScontoTipo($array['ScontoMaggiorazione']['Tipo']);
        }
        if (!empty($array['ScontoMaggiorazione']['Percentuale'])) {
            $o->setScontoPercentuale($array['ScontoMaggiorazione']['Percentuale']);
        }
        if (!empty($array['ScontoMaggiorazione']['Importo'])) {
            $o->setScontoImporto($array['ScontoMaggiorazione']['Importo']);
        }

        if (!empty($array['AltriDatiGestionali']['TipoDato'])) {
            $o->setTipoDato($array['AltriDatiGestionali']['TipoDato']);
        }
        if (!empty($array['AltriDatiGestionali']['RiferimentoTesto'])) {
            $o->setRiferimentoTesto($array['AltriDatiGestionali']['RiferimentoTesto']);
        }
        if (!empty($array['AltriDatiGestionali']['RiferimentoNumero'])) {
            $o->setRiferimentoNumero($array['AltriDatiGestionali']['RiferimentoNumero']);
        }
        if (!empty($array['AltriDatiGestionali']['RiferimentoData'])) {
            $o->setRiferimentoData($array['AltriDatiGestionali']['RiferimentoData']);
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