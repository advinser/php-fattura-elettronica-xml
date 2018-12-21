<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:01
 */

namespace Advinser\FatturaElettronicaXml\Body;


class DatiBeniServizi
{
    /**
     * @var  DettaglioLinea[] | null
     */
    private $DettaglioLinee;

    /**
     * @var DatiRiepilogo[] | null
     */
    private $DatiRiepilogo;



    /**
     * @return DettaglioLinea[]|null
     */
    public function getDettaglioLinee(): ?array
    {
        return $this->DettaglioLinee;
    }

    /**
     * @param DettaglioLinea[]|null $DettaglioLinee
     * @return DatiBeniServizi
     */
    public function setDettaglioLinee(?array $DettaglioLinee): DatiBeniServizi
    {
        $this->DettaglioLinee = $DettaglioLinee;
        return $this;
    }

    /**
     * @param DettaglioLinea $dettaglioLinea
     * @return DatiBeniServizi
     */
    public function addDettaglioLinea(DettaglioLinea $dettaglioLinea): DatiBeniServizi
    {
        $this->DettaglioLinee[] = $dettaglioLinea;
        return $this;
    }

    /**
     * @return DatiRiepilogo[]|null
     */
    public function getDatiRiepilogo(): ?array
    {
        return $this->DatiRiepilogo;
    }

    /**
     * @param DatiRiepilogo[]|null $DatiRiepilogo
     * @return DatiBeniServizi
     */
    public function setDatiRiepilogo(?array $DatiRiepilogo): DatiBeniServizi
    {
        $this->DatiRiepilogo = $DatiRiepilogo;
        return $this;
    }

    /**
     * @param DatiRiepilogo $DatiRiepilogo
     * @return DatiBeniServizi
     */
    public function addDatiRiepilogo(DatiRiepilogo $DatiRiepilogo): DatiBeniServizi
    {
        $this->DatiRiepilogo[] = $DatiRiepilogo;
        return $this;
    }



    /**
     * @return array
     */
    public function toArray()
    {
        $array = [
            'DettaglioLinee' => null,
            'DatiRiepilogo' => null,
        ];

        if (!empty($this->getDettaglioLinee())) {
            if (count($this->getDettaglioLinee()) === 1) {
                $array['DettaglioLinee'] = $this->getDettaglioLinee()[0]->toArray();
            } else {
                $a = [];
                foreach ($this->getDettaglioLinee() as $dettaglioLinea) {
                    $a[] = $dettaglioLinea->toArray();
                }
                $array['DettaglioLinee'] = $a;
            }
        }

        if (!empty($this->getDatiRiepilogo())) {
            if (count($this->getDatiRiepilogo()) === 1) {
                $array['DatiRiepilogo'] = $this->getDatiRiepilogo()[0]->toArray();
            } else {
                $a = [];
                foreach ($this->getDatiRiepilogo() as $datiRiepilogo) {
                    $a[] = $datiRiepilogo->toArray();
                }
                $array['DatiRiepilogo'] = $a;
            }
        }
        return $array;
    }


    public static function fromArray(array $array): DatiBeniServizi
    {
        $o = new DatiBeniServizi();

        if (isset($array['DettaglioLinee'])) {
            if (isset($array['DettaglioLinee'][0])) {
                foreach ($array['DettaglioLinee'] as $item) {
                    $o->addDettaglioLinea(DettaglioLinea::fromArray($item));
                }
            } else {
                $o->addDettaglioLinea(DettaglioLinea::fromArray($array['DettaglioLinee']));
            }
        }

        if (!empty($array['DatiRiepilogo'])) {
            if (isset($array['DatiRiepilogo'][0])) {
                foreach ($array['DatiRiepilogo'] as $item) {
                    $o->addDatiRiepilogo(DatiRiepilogo::fromArray($item));
                }
            } else {
                $o->addDatiRiepilogo(DatiRiepilogo::fromArray($array['DatiRiepilogo']));
            }
        }

        return $o;
    }

}