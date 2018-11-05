<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:02
 */

namespace FatturaElettronicaXml\Body;


class Allegati
{
    /**
     * @var string|null
     */
    private $NomeAttachment;
    /**
     * @var string|null
     */
    private $AlgoritmoCompressione;
    /**
     * @var string|null
     */
    private $FormatoAttachment;
    /**
     * @var string|null
     */
    private $DescrizioneAttachment;
    /**
     * @var string|null
     */
    private $Attachment;

    /**
     * @return null|string
     */
    public function getNomeAttachment(): ?string
    {
        return $this->NomeAttachment;
    }

    /**
     * @param null|string $NomeAttachment
     * @return Allegati
     */
    public function setNomeAttachment(?string $NomeAttachment): Allegati
    {
        $this->NomeAttachment = $NomeAttachment;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAlgoritmoCompressione(): ?string
    {
        return $this->AlgoritmoCompressione;
    }

    /**
     * @param null|string $AlgoritmoCompressione
     * @return Allegati
     */
    public function setAlgoritmoCompressione(?string $AlgoritmoCompressione): Allegati
    {
        $this->AlgoritmoCompressione = $AlgoritmoCompressione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFormatoAttachment(): ?string
    {
        return $this->FormatoAttachment;
    }

    /**
     * @param null|string $FormatoAttachment
     * @return Allegati
     */
    public function setFormatoAttachment(?string $FormatoAttachment): Allegati
    {
        $this->FormatoAttachment = $FormatoAttachment;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescrizioneAttachment(): ?string
    {
        return $this->DescrizioneAttachment;
    }

    /**
     * @param null|string $DescrizioneAttachment
     * @return Allegati
     */
    public function setDescrizioneAttachment(?string $DescrizioneAttachment): Allegati
    {
        $this->DescrizioneAttachment = $DescrizioneAttachment;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAttachment(): ?string
    {
        return $this->Attachment;
    }

    /**
     * @param null|string $Attachment
     * @return Allegati
     */
    public function setAttachment(?string $Attachment): Allegati
    {
        $this->Attachment = $Attachment;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        //todo aggiungere validazione
        $array = [
            'NomeAttachment' => $this->getNomeAttachment(),
            'AlgoritmoCompressione' => $this->getAlgoritmoCompressione(),
            'FormatoAttachment' => $this->getFormatoAttachment(),
            'DescrizioneAttachment' => $this->getDescrizioneAttachment(),
            'Attachment' => $this->getAttachment(),
        ];
        return $array;
    }

    public static function fromArray($array):Allegati
    {
        $o = new Allegati();

        foreach ($array as $k => $v){
            $m = 'set'.$k;
            $o->{$m}($v);
        }

        return $o;
    }

}