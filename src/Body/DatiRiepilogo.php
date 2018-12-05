<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-05
 * Time:         10:24
 */

namespace Advinser\FatturaElettronicaXml\Body;


class DatiRiepilogo
{
    /**
     * @var string|null
     */
    private $AliquotaIVA;

    /**
     * @var string|null
     */
    private $Natura;

    /**
     * @var string|null
     */
    private $SpeseAccessorie;

    /**
     * @var string|null
     */
    private $Arrotondamento;

    /**
     * @var string|null
     */
    private $ImponibileImporto;

    /**
     * @var string|null
     */
    private $Imposta;
    /**
     * @var string|null
     */
    private $EsigibilitaIVA;
    /**
     * @var string|null
     */
    private $RiferimentoNormativo;

    /**
     * @return string|null
     */
    public function getAliquotaIVA(): ?string
    {
        return $this->AliquotaIVA;
    }

    /**
     * @param string|null $AliquotaIVA
     * @return DatiRiepilogo
     */
    public function setAliquotaIVA(?string $AliquotaIVA): DatiRiepilogo
    {
        $this->AliquotaIVA = $AliquotaIVA;
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
     * @return DatiRiepilogo
     */
    public function setNatura(?string $Natura): DatiRiepilogo
    {
        $this->Natura = $Natura;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSpeseAccessorie(): ?string
    {
        return $this->SpeseAccessorie;
    }

    /**
     * @param string|null $SpeseAccessorie
     * @return DatiRiepilogo
     */
    public function setSpeseAccessorie(?string $SpeseAccessorie): DatiRiepilogo
    {
        $this->SpeseAccessorie = $SpeseAccessorie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArrotondamento(): ?string
    {
        return $this->Arrotondamento;
    }

    /**
     * @param string|null $Arrotondamento
     * @return DatiRiepilogo
     */
    public function setArrotondamento(?string $Arrotondamento): DatiRiepilogo
    {
        $this->Arrotondamento = $Arrotondamento;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImponibileImporto(): ?string
    {
        return $this->ImponibileImporto;
    }

    /**
     * @param string|null $ImponibileImporto
     * @return DatiRiepilogo
     */
    public function setImponibileImporto(?string $ImponibileImporto): DatiRiepilogo
    {
        $this->ImponibileImporto = $ImponibileImporto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImposta(): ?string
    {
        return $this->Imposta;
    }

    /**
     * @param string|null $Imposta
     * @return DatiRiepilogo
     */
    public function setImposta(?string $Imposta): DatiRiepilogo
    {
        $this->Imposta = $Imposta;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEsigibilitaIVA(): ?string
    {
        return $this->EsigibilitaIVA;
    }

    /**
     * @param string|null $EsigibilitaIVA
     * @return DatiRiepilogo
     */
    public function setEsigibilitaIVA(?string $EsigibilitaIVA): DatiRiepilogo
    {
        $this->EsigibilitaIVA = $EsigibilitaIVA;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRiferimentoNormativo(): ?string
    {
        return $this->RiferimentoNormativo;
    }

    /**
     * @param string|null $RiferimentoNormativo
     * @return DatiRiepilogo
     */
    public function setRiferimentoNormativo(?string $RiferimentoNormativo): DatiRiepilogo
    {
        $this->RiferimentoNormativo = $RiferimentoNormativo;
        return $this;
    }



    /**
     * @return array
     */
    public function toArray()
    {
        $array = [
            'AliquotaIVA' => null,
            'Natura' => null,
            'SpeseAccessorie' => null,
            'Arrotondamento' => null,
            'ImponibileImporto' => null,
            'Imposta' => null,
            'EsigibilitaIVA' => null,
            'RiferimentoNormativo' => null,
        ];

        if (!empty($this->getAliquotaIVA())) {
            $array['AliquotaIVA'] = number_format($this->getAliquotaIVA(), 2, '.', '');
        }

        if (!empty($this->getNatura())) {
            $array['Natura'] = $this->getNatura();
        }
        if (!empty($this->getSpeseAccessorie())) {
            $array['SpeseAccessorie'] = number_format(floatval($this->getSpeseAccessorie()), 2, '.', '');
        }
        if (!empty($this->getArrotondamento())) {
            $array['Arrotondamento'] = number_format(floatval($this->getArrotondamento()), 2, '.', '');
        }
        if (!empty($this->getImponibileImporto())) {
            $array['ImponibileImporto'] = number_format(floatval($this->getImponibileImporto()), 2, '.', '');
        }
        if (!empty($this->getImposta())) {
            $array['Imposta'] = number_format(floatval($this->getImposta()), 2, '.', '');
        }
        if (!empty($this->getEsigibilitaIVA())) {
            $array['EsigibilitaIVA'] = $this->getEsigibilitaIVA();
        }
        if (!empty($this->getRiferimentoNormativo())) {
            $array['RiferimentoNormativo'] = $this->getRiferimentoNormativo();
        }

        return $array;
    }


    public static function fromArray(array $array): DatiRiepilogo
    {
        $o = new DatiRiepilogo();

        foreach ($array as $k => $v) {
            $m = 'set' . $k;
            $o->{$m}($v);
        }

        return $o;
    }
}