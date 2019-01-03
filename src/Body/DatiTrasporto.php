<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:29
 */

namespace Advinser\FatturaElettronicaXml\Body;


use Advinser\FatturaElettronicaXml\Structures\Anagrafica;
use Advinser\FatturaElettronicaXml\Structures\Fiscale;
use Advinser\FatturaElettronicaXml\Structures\Indirizzo;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class DatiTrasporto
{
    /**
     * @var Fiscale|null
     */
    private $IdFiscaleIVA;
    /**
     * @var string|null
     */
    private $CodiceFiscale;
    /**
     * @var Anagrafica|null
     */
    private $Anagrafica;
    /**
     * @var string|null
     */
    private $NumeroLicenzaGuida;
    /**
     * @var string|null
     */
    private $MezzoTrasporto;
    /**
     * @var string|null
     */
    private $CausaleTrasporto;
    /**
     * @var int|null
     */
    private $NumeroColli;
    /**
     * @var string|null
     */
    private $Descrizione;
    /**
     * @var string|null
     */
    private $UnitaMisuraPeso;
    /**
     * @var string|null
     */
    private $PesoLordo;
    /**
     * @var string|null
     */
    private $PesoNetto;
    /**
     * @var string|null
     */
    private $DataOraRitiro;
    /**
     * @var string|null
     */
    private $DataInizioTrasporto;
    /**
     * @var string|null
     */
    private $TipoResa;
    /**
     * @var Indirizzo|null
     */
    private $IndirizzoResa;

    /**
     * @var string|null
     */
    private $DataOraConsegna;

    /**
     * @return Fiscale|null
     */
    public function getIdFiscaleIVA(): ?Fiscale
    {
        return $this->IdFiscaleIVA;
    }

    /**
     * @param Fiscale|null $IdFiscaleIVA
     * @return DatiTrasporto
     */
    public function setIdFiscaleIVA(?Fiscale $IdFiscaleIVA): DatiTrasporto
    {
        $this->IdFiscaleIVA = $IdFiscaleIVA;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodiceFiscale(): ?string
    {
        return $this->CodiceFiscale;
    }

    /**
     * @param string|null $CodiceFiscale
     * @return DatiTrasporto
     */
    public function setCodiceFiscale(?string $CodiceFiscale): DatiTrasporto
    {
        $this->CodiceFiscale = strtoupper($CodiceFiscale);
        return $this;
    }

    /**
     * @return Anagrafica|null
     */
    public function getAnagrafica(): ?Anagrafica
    {
        return $this->Anagrafica;
    }

    /**
     * @param Anagrafica|null $Anagrafica
     * @return DatiTrasporto
     */
    public function setAnagrafica(?Anagrafica $Anagrafica): DatiTrasporto
    {
        $this->Anagrafica = $Anagrafica;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumeroLicenzaGuida(): ?string
    {
        return $this->NumeroLicenzaGuida;
    }

    /**
     * @param null|string $NumeroLicenzaGuida
     * @return DatiTrasporto
     */
    public function setNumeroLicenzaGuida(?string $NumeroLicenzaGuida): DatiTrasporto
    {
        $this->NumeroLicenzaGuida = $NumeroLicenzaGuida;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMezzoTrasporto(): ?string
    {
        return $this->MezzoTrasporto;
    }

    /**
     * @param null|string $MezzoTrasporto
     * @return DatiTrasporto
     */
    public function setMezzoTrasporto(?string $MezzoTrasporto): DatiTrasporto
    {
        $this->MezzoTrasporto = $MezzoTrasporto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCausaleTrasporto(): ?string
    {
        return $this->CausaleTrasporto;
    }

    /**
     * @param null|string $CausaleTrasporto
     * @return DatiTrasporto
     */
    public function setCausaleTrasporto(?string $CausaleTrasporto): DatiTrasporto
    {
        $this->CausaleTrasporto = $CausaleTrasporto;
        return $this;
    }

    /**
     * @return null|int
     */
    public function getNumeroColli(): ?int
    {
        return $this->NumeroColli;
    }

    /**
     * @param int|null $NumeroColli
     * @return DatiTrasporto
     */
    public function setNumeroColli(?int $NumeroColli): DatiTrasporto
    {
        $this->NumeroColli = $NumeroColli;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescrizione(): ?string
    {
        return $this->Descrizione;
    }

    /**
     * @param null|string $Descrizione
     * @return DatiTrasporto
     */
    public function setDescrizione(?string $Descrizione): DatiTrasporto
    {
        $this->Descrizione = $Descrizione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUnitaMisuraPeso(): ?string
    {
        return $this->UnitaMisuraPeso;
    }

    /**
     * @param string|null $UnitaMisuraPeso
     * @return DatiTrasporto
     */
    public function setUnitaMisuraPeso(?string $UnitaMisuraPeso): DatiTrasporto
    {
        $this->UnitaMisuraPeso = $UnitaMisuraPeso;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPesoLordo(): ?string
    {
        return $this->PesoLordo;
    }

    /**
     * @param float|null $PesoLordo
     * @return DatiTrasporto
     */
    public function setPesoLordo(?float $PesoLordo): DatiTrasporto
    {
        $this->PesoLordo = number_format($PesoLordo, 2, '.', '');
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPesoNetto(): ?string
    {
        return $this->PesoNetto;
    }

    /**
     * @param float|null $PesoNetto
     * @return DatiTrasporto
     */
    public function setPesoNetto(?float $PesoNetto): DatiTrasporto
    {
        $this->PesoNetto = number_format($PesoNetto, 2, '.', '');
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataOraRitiro(): ?string
    {
        return $this->DataOraRitiro;
    }

    /**
     * @param null|string $DataOraRitiro
     * @return DatiTrasporto
     */
    public function setDataOraRitiro(?string $DataOraRitiro): DatiTrasporto
    {
        $this->DataOraRitiro = $DataOraRitiro;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataInizioTrasporto(): ?string
    {
        return $this->DataInizioTrasporto;
    }

    /**
     * @param null|string $DataInizioTrasporto
     * @return DatiTrasporto
     */
    public function setDataInizioTrasporto(?string $DataInizioTrasporto): DatiTrasporto
    {
        $this->DataInizioTrasporto = $DataInizioTrasporto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTipoResa(): ?string
    {
        return $this->TipoResa;
    }

    /**
     * @param null|string $TipoResa
     * @return DatiTrasporto
     */
    public function setTipoResa(?string $TipoResa): DatiTrasporto
    {
        $this->TipoResa = $TipoResa;
        return $this;
    }

    /**
     * @return Indirizzo|null
     */
    public function getIndirizzoResa(): ?Indirizzo
    {
        return $this->IndirizzoResa;
    }

    /**
     * @param Indirizzo|null $IndirizzoResa
     * @return DatiTrasporto
     */
    public function setIndirizzoResa(?Indirizzo $IndirizzoResa): DatiTrasporto
    {
        $this->IndirizzoResa = $IndirizzoResa;
        return $this;
    }


    /**
     * @return null|string
     */
    public function getDataOraConsegna(): ?string
    {
        return $this->DataOraConsegna;
    }

    /**
     * @param null|string $DataOraConsegna
     * @return DatiTrasporto
     */
    public function setDataOraConsegna(?string $DataOraConsegna): DatiTrasporto
    {
        $this->DataOraConsegna = $DataOraConsegna;
        return $this;
    }


    public function toArray()
    {
        //todo aggiungere validazione
        $array = [
            'DatiAnagraficiVettore' => [
                'IdFiscaleIVA' => null,
                'CodiceFiscale' => $this->getCodiceFiscale(),
                'Anagrafica' => null,
                'NumeroLicenzaGuida' => $this->getNumeroLicenzaGuida(),
            ],
            'MezzoTrasporto' => null,
            'CausaleTrasporto' => null,
            'NumeroColli' => null,
            'Descrizione' => null,
            'UnitaMisuraPeso' => null,
            'PesoLordo' => null,
            'PesoNetto' => null,
            'DataOraRitiro' => null,
            'DataInizioTrasporto' => null,
            'TipoResa' => null,
            'IndirizzoResa' => null,
            'DataOraConsegna' => null,
        ];


        if ($this->getIdFiscaleIVA() instanceof Fiscale) {
            $array['DatiAnagraficiVettore']['IdFiscaleIVA'] = $this->getIdFiscaleIVA()->toArray();
        }

        if ($this->getAnagrafica() instanceof Anagrafica) {
            $array['DatiAnagraficiVettore']['Anagrafica'] = $this->getAnagrafica()->toArray();
            if (empty($array['DatiAnagraficiVettore']['Anagrafica'])) {
                $array['DatiAnagraficiVettore']['Anagrafica'] = null;
            }
        }

        if (!empty($this->getMezzoTrasporto())) {
            $array['MezzoTrasporto'] = $this->getMezzoTrasporto();
        }
        if (!empty($this->getCausaleTrasporto())) {
            $array['CausaleTrasporto'] = $this->getCausaleTrasporto();
        }
        if (!empty($this->getNumeroColli())) {
            $array['NumeroColli'] = $this->getNumeroColli();
        }
        if (!empty($this->getDescrizione())) {
            $array['Descrizione'] = $this->getDescrizione();
        }
        if (!empty($this->getUnitaMisuraPeso())) {
            $array['UnitaMisuraPeso'] = $this->getUnitaMisuraPeso();
        }
        if (!empty($this->getPesoLordo())) {
            $array['PesoLordo'] = $this->getPesoLordo();
        }
        if (!empty($this->getPesoNetto())) {
            $array['PesoNetto'] = $this->getPesoNetto();
        }
        if (!empty($this->getDataOraRitiro())) {
            $array['DataOraRitiro'] = $this->getDataOraRitiro();
        }
        if (!empty($this->getDataInizioTrasporto())) {
            $array['DataInizioTrasporto'] = $this->getDataInizioTrasporto();
        }
        if (!empty($this->getTipoResa())) {
            $array['TipoResa'] = $this->getTipoResa();
        }

        if ($this->getIndirizzoResa() instanceof Indirizzo) {
            $array['IndirizzoResa'] = $this->getIndirizzoResa()->toArray();
        }

        if (!empty($this->getDataOraConsegna())) {
            $array['DataOraConsegna'] = $this->getDataOraConsegna();
        }

        return $array;
    }

    /**
     * @param array $array
     * @return DatiTrasporto
     */
    public static function fromArray(array $array): DatiTrasporto
    {
        $o = new DatiTrasporto();


        if (!empty($array['DatiAnagraficiVettore']['IdFiscaleIVA'])) {
            $o->setIdFiscaleIVA(Fiscale::fromArray($array['DatiAnagraficiVettore']['IdFiscaleIVA']));
        }

        if (!empty($array['DatiAnagraficiVettore']['Anagrafica'])) {
            $o->setAnagrafica(Anagrafica::fromArray($array['DatiAnagraficiVettore']['Anagrafica']));
        }

        if (!empty($array['MezzoTrasporto'])) {
            $o->setMezzoTrasporto($array['MezzoTrasporto']);
        }
        if (!empty($array['CausaleTrasporto'])) {
            $o->setCausaleTrasporto($array['CausaleTrasporto']);
        }
        if (!empty($array['NumeroColli'])) {
            $o->setNumeroColli($array['NumeroColli']);
        }
        if (!empty($array['Descrizione'])) {
            $o->setDescrizione($array['Descrizione']);
        }
        if (!empty($array['UnitaMisuraPeso'])) {
            $o->setUnitaMisuraPeso($array['UnitaMisuraPeso']);
        }
        if (!empty($array['PesoLordo'])) {
            $o->setPesoLordo($array['PesoLordo']);
        }
        if (!empty($array['PesoNetto'])) {
            $o->setPesoNetto($array['PesoNetto']);
        }
        if (!empty($array['DataOraRitiro'])) {
            $o->setDataOraRitiro($array['DataOraRitiro']);
        }
        if (!empty($array['DataInizioTrasporto'])) {
            $o->setDataInizioTrasporto($array['DataInizioTrasporto']);
        }
        if (!empty($array['TipoResa'])) {
            $o->setTipoResa($array['TipoResa']);
        }

        if (!empty($array['IndirizzoResa'])) {
            $o->setIndirizzoResa(Indirizzo::fromArray($array['IndirizzoResa']));
        }
        if (!empty($array['DataOraConsegna'])) {
            $o->setDataOraConsegna($array['DataOraConsegna']);
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