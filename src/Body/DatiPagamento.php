<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:01
 */

namespace Advinser\FatturaElettronicaXml\Body;


use Advinser\FatturaElettronicaXml\FatturaElettronicaException;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class DatiPagamento
{
    private $CondizioniPagamento;


    /**
     * @var DettaglioPagamento[] | null
     */
    private $dettaglioPagamento;

    /**
     * @return DettaglioPagamento[] | null
     */
    public function getDettaglioPagamento(): ?array
    {
        return $this->dettaglioPagamento;
    }

    /**
     * @param DettaglioPagamento[] $dettaglioPagamento
     * @return DatiPagamento
     */
    public function setDettaglioPagamento(array $dettaglioPagamento): DatiPagamento
    {
        $this->dettaglioPagamento = $dettaglioPagamento;
        return $this;
    }

    /**
     * @param DettaglioPagamento $dettaglioPagamento
     * @return DatiPagamento
     */
    public function addDettaglioPagamento(DettaglioPagamento $dettaglioPagamento): DatiPagamento
    {
        $this->dettaglioPagamento[] = $dettaglioPagamento;
        return $this;
    }

    
    /**
     * @return mixed
     */
    public function getCondizioniPagamento()
    {
        return $this->CondizioniPagamento;
    }

    /**
     * @param $CondizioniPagamento
     * @return DatiPagamento
     * @throws FatturaElettronicaException
     */
    public function setCondizioniPagamento($CondizioniPagamento): DatiPagamento
    {
        switch ($CondizioniPagamento) {
            case'TP01':
            case'TP02':
            case'TP03':
                $this->CondizioniPagamento = $CondizioniPagamento;
                break;
            default:
                throw new FatturaElettronicaException("Invalid value for 'CondizioniPagamento', valid value are TP01,TP02,TP03, you provide '" . $CondizioniPagamento . "'");
                break;

        }
        return $this;
    }

    /**
     * @return array
     * @throws FatturaElettronicaException
     */
    public function toArray()
    {
        //todo aggiungere validazione
        $array = [
            'CondizioniPagamento' => $this->getCondizioniPagamento(),
        ];

        if (count($this->getDettaglioPagamento()) == 0) {
            throw new FatturaElettronicaException("DatiPagamento :: missed istance of DettaglioPagamento");
        } else if (count($this->getDettaglioPagamento()) > 1) {
            foreach ($this->getDettaglioPagamento() as $dp) {
                $array['DettaglioPagamento'][] = $dp->toArray();
            }
        } else {
            $array['DettaglioPagamento'] = $this->getDettaglioPagamento()[0]->toArray();
        }

        return $array;
    }

    /**
     * @param $array
     * @return DatiPagamento
     * @throws FatturaElettronicaException
     */
    public static function fromArray($array): DatiPagamento
    {
        $o = new DatiPagamento();

        if (!empty($array['CondizioniPagamento'])) {
            $o->setCondizioniPagamento($array['CondizioniPagamento']);
        }


        if (!empty($array['DettaglioPagamento'])) {
            if (isset($array['DettaglioPagamento'][0])) {
                foreach ($array['DettaglioPagamento'] as $item) {
                    $o->addDettaglioPagamento(DettaglioPagamento::fromArray($item));
                }
            } else {
                $o->addDettaglioPagamento(DettaglioPagamento::fromArray($array['DettaglioPagamento']));
            }
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

    }

}