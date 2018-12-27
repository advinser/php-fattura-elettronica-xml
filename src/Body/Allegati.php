<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:02
 */

namespace Advinser\FatturaElettronicaXml\Body;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

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

    /**
     * @param $array
     * @return Allegati
     */
    public static function fromArray($array):Allegati
    {
        $o = new Allegati();

        foreach ($array as $k => $v){
            $m = 'set'.$k;
            $o->{$m}($v);
        }

        return $o;
    }

    /**
     * @param array $array
     * @param ValidateErrorContainer $errorContainer
     * @param string $tag
     */
    public static function validate(array $array,ValidateErrorContainer $errorContainer, $tag = ''){
        if(empty($array['NomeAttachment'])){
            $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_REQUIRED,$tag."Missing 'NomeAttachment'",'Allegati::01',__LINE__));
        }else{
            if(strlen($array['NomeAttachment'])>60){
                $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_INVALID,$tag."Invalid 'NomeAttachment', max length is 60",'Allegati::02',__LINE__));
            }

        }
        if(empty($array['Attachment'])){
            $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_REQUIRED,$tag."Missing 'Attachment'",'Allegati::03',__LINE__));
        }else{
           //todo calculate size in Kb using base64 Allegati::04 , there can be more then 1 attachment and more than 1 body
        }
        if(!empty($array['AlgoritmoCompressione'])){
            if(strlen($array['AlgoritmoCompressione'])>10){
                $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_INVALID,$tag."Invalid 'AlgoritmoCompressione', max length is 10",'Allegati::05',__LINE__));

            }
        }
        if(!empty($array['FormatoAttachment'])){
            if(strlen($array['FormatoAttachment'])>10){
                $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_INVALID,$tag."Invalid 'FormatoAttachment', max length is 10",'Allegati::06',__LINE__));

            }
        }
        if(!empty($array['DescrizioneAttachment'])){
            if(strlen($array['DescrizioneAttachment'])>100){
                $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_INVALID,$tag."Invalid 'FormatoAttachment', max length is 100",'Allegati::07',__LINE__));

            }
        }
    }
}