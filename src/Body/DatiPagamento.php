<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:01
 */

namespace FatturaElettronicaXml\Body;


use FatturaElettronicaXml\FatturaElettronicaException;

class DatiPagamento
{
    private $CondizioniPagamento;

    /**
     * @var string|null
     */
    private $Beneficiario;
    /**
     * @var string|null
     */
    private $ModalitaPagamento;
    /**
     * @var string|null
     */
    private $DataRiferimentoTerminiPagamento;
    /**
     * @var string|null
     */
    private $GiorniTerminiPagamento;
    /**
     * @var string|null
     */
    private $DataScadenzaPagamento;
    /**
     * @var string|null
     */
    private $ImportoPagamento;
    /**
     * @var string|null
     */
    private $CodUfficioPostale;
    /**
     * @var string|null
     */
    private $CognomeQuietanzante;
    /**
     * @var string|null
     */
    private $NomeQuietanzante;
    /**
     * @var string|null
     */
    private $CFQuietanzante;
    /**
     * @var string|null
     */
    private $TitoloQuietanzante;
    /**
     * @var string|null
     */
    private $IstitutoFinanziario;
    /**
     * @var string|null
     */
    private $IBAN;
    /**
     * @var string|null
     */
    private $ABI;
    /**
     * @var string|null
     */
    private $CAB;
    /**
     * @var string|null
     */
    private $BIC;
    /**
     * @var string|null
     */
    private $ScontoPagamentoAnticipato;
    /**
     * @var string|null
     */
    private $DataLimitePagamentoAnticipato;
    /**
     * @var string|null
     */
    private $PenalitaPagamentiRitardati;
    /**
     * @var string|null
     */
    private $DataDecorrenzaPenale;
    /**
     * @var string|null
     */
    private $CodicePagamento;

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
     * @return null|string
     */
    public function getBeneficiario(): ?string
    {
        return $this->Beneficiario;
    }

    /**
     * @param null|string $Beneficiario
     * @return DatiPagamento
     */
    public function setBeneficiario(?string $Beneficiario): DatiPagamento
    {
        $this->Beneficiario = $Beneficiario;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getModalitaPagamento(): ?string
    {
        return $this->ModalitaPagamento;
    }

    /**
     * @param null|string $ModalitaPagamento
     * @return DatiPagamento
     */
    public function setModalitaPagamento(?string $ModalitaPagamento): DatiPagamento
    {
        $this->ModalitaPagamento = $ModalitaPagamento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataRiferimentoTerminiPagamento(): ?string
    {
        return $this->DataRiferimentoTerminiPagamento;
    }

    /**
     * @param null|string $DataRiferimentoTerminiPagamento
     * @return DatiPagamento
     */
    public function setDataRiferimentoTerminiPagamento(?string $DataRiferimentoTerminiPagamento): DatiPagamento
    {
        $this->DataRiferimentoTerminiPagamento = $DataRiferimentoTerminiPagamento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getGiorniTerminiPagamento(): ?string
    {
        return $this->GiorniTerminiPagamento;
    }

    /**
     * @param null|string $GiorniTerminiPagamento
     * @return DatiPagamento
     */
    public function setGiorniTerminiPagamento(?string $GiorniTerminiPagamento): DatiPagamento
    {
        $this->GiorniTerminiPagamento = $GiorniTerminiPagamento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataScadenzaPagamento(): ?string
    {
        return $this->DataScadenzaPagamento;
    }

    /**
     * @param null|string $DataScadenzaPagamento
     * @return DatiPagamento
     */
    public function setDataScadenzaPagamento(?string $DataScadenzaPagamento): DatiPagamento
    {
        $this->DataScadenzaPagamento = $DataScadenzaPagamento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getImportoPagamento(): ?string
    {
        return $this->ImportoPagamento;
    }

    /**
     * @param null|string $ImportoPagamento
     * @return DatiPagamento
     */
    public function setImportoPagamento(?string $ImportoPagamento): DatiPagamento
    {
        $this->ImportoPagamento = $ImportoPagamento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodUfficioPostale(): ?string
    {
        return $this->CodUfficioPostale;
    }

    /**
     * @param null|string $CodUfficioPostale
     * @return DatiPagamento
     */
    public function setCodUfficioPostale(?string $CodUfficioPostale): DatiPagamento
    {
        $this->CodUfficioPostale = $CodUfficioPostale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCognomeQuietanzante(): ?string
    {
        return $this->CognomeQuietanzante;
    }

    /**
     * @param null|string $CognomeQuietanzante
     * @return DatiPagamento
     */
    public function setCognomeQuietanzante(?string $CognomeQuietanzante): DatiPagamento
    {
        $this->CognomeQuietanzante = $CognomeQuietanzante;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNomeQuietanzante(): ?string
    {
        return $this->NomeQuietanzante;
    }

    /**
     * @param null|string $NomeQuietanzante
     * @return DatiPagamento
     */
    public function setNomeQuietanzante(?string $NomeQuietanzante): DatiPagamento
    {
        $this->NomeQuietanzante = $NomeQuietanzante;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCFQuietanzante(): ?string
    {
        return $this->CFQuietanzante;
    }

    /**
     * @param null|string $CFQuietanzante
     * @return DatiPagamento
     */
    public function setCFQuietanzante(?string $CFQuietanzante): DatiPagamento
    {
        $this->CFQuietanzante = $CFQuietanzante;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitoloQuietanzante(): ?string
    {
        return $this->TitoloQuietanzante;
    }

    /**
     * @param null|string $TitoloQuietanzante
     * @return DatiPagamento
     */
    public function setTitoloQuietanzante(?string $TitoloQuietanzante): DatiPagamento
    {
        $this->TitoloQuietanzante = $TitoloQuietanzante;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIstitutoFinanziario(): ?string
    {
        return $this->IstitutoFinanziario;
    }

    /**
     * @param null|string $IstitutoFinanziario
     * @return DatiPagamento
     */
    public function setIstitutoFinanziario(?string $IstitutoFinanziario): DatiPagamento
    {
        $this->IstitutoFinanziario = $IstitutoFinanziario;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIBAN(): ?string
    {
        return $this->IBAN;
    }

    /**
     * @param null|string $IBAN
     * @return DatiPagamento
     */
    public function setIBAN(?string $IBAN): DatiPagamento
    {
        $this->IBAN = $IBAN;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getABI(): ?string
    {
        return $this->ABI;
    }

    /**
     * @param null|string $ABI
     * @return DatiPagamento
     */
    public function setABI(?string $ABI): DatiPagamento
    {
        $this->ABI = $ABI;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCAB(): ?string
    {
        return $this->CAB;
    }

    /**
     * @param null|string $CAB
     * @return DatiPagamento
     */
    public function setCAB(?string $CAB): DatiPagamento
    {
        $this->CAB = $CAB;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getBIC(): ?string
    {
        return $this->BIC;
    }

    /**
     * @param null|string $BIC
     * @return DatiPagamento
     */
    public function setBIC(?string $BIC): DatiPagamento
    {
        $this->BIC = $BIC;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getScontoPagamentoAnticipato(): ?string
    {
        return $this->ScontoPagamentoAnticipato;
    }

    /**
     * @param null|string $ScontoPagamentoAnticipato
     * @return DatiPagamento
     */
    public function setScontoPagamentoAnticipato(?string $ScontoPagamentoAnticipato): DatiPagamento
    {
        $this->ScontoPagamentoAnticipato = $ScontoPagamentoAnticipato;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataLimitePagamentoAnticipato(): ?string
    {
        return $this->DataLimitePagamentoAnticipato;
    }

    /**
     * @param null|string $DataLimitePagamentoAnticipato
     * @return DatiPagamento
     */
    public function setDataLimitePagamentoAnticipato(?string $DataLimitePagamentoAnticipato): DatiPagamento
    {
        $this->DataLimitePagamentoAnticipato = $DataLimitePagamentoAnticipato;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPenalitaPagamentiRitardati(): ?string
    {
        return $this->PenalitaPagamentiRitardati;
    }

    /**
     * @param null|string $PenalitaPagamentiRitardati
     * @return DatiPagamento
     */
    public function setPenalitaPagamentiRitardati(?string $PenalitaPagamentiRitardati): DatiPagamento
    {
        $this->PenalitaPagamentiRitardati = $PenalitaPagamentiRitardati;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDataDecorrenzaPenale(): ?string
    {
        return $this->DataDecorrenzaPenale;
    }

    /**
     * @param null|string $DataDecorrenzaPenale
     * @return DatiPagamento
     */
    public function setDataDecorrenzaPenale(?string $DataDecorrenzaPenale): DatiPagamento
    {
        $this->DataDecorrenzaPenale = $DataDecorrenzaPenale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodicePagamento(): ?string
    {
        return $this->CodicePagamento;
    }

    /**
     * @param null|string $CodicePagamento
     * @return DatiPagamento
     */
    public function setCodicePagamento(?string $CodicePagamento): DatiPagamento
    {
        $this->CodicePagamento = $CodicePagamento;
        return $this;
    }


    /**
     * @return array
     */
    public function toArray()
    {
        //todo aggiungere validazione
        $array = [
            'CondizioniPagamento' => $this->getCondizioniPagamento(),
            'DettaglioPagamento' => [
                'Beneficiario' => $this->getBeneficiario(),
                'ModalitaPagamento' => $this->getModalitaPagamento(),
                'DataRiferimentoTerminiPagamento' => $this->getDataRiferimentoTerminiPagamento(),
                'GiorniTerminiPagamento' => $this->getGiorniTerminiPagamento(),
                'DataScadenzaPagamento' => $this->getDataScadenzaPagamento(),
                'ImportoPagamento' => !empty($this->getImportoPagamento()) ? number_format($this->getImportoPagamento(), 2, '.', '') : null,
                'CodUfficioPostale' => $this->getCodUfficioPostale(),
                'CognomeQuietanzante' => $this->CognomeQuietanzante,
                'NomeQuietanzante' => $this->getNomeQuietanzante(),
                'CFQuietanzante' => $this->getCFQuietanzante(),
                'TitoloQuietanzante' => $this->getTitoloQuietanzante(),
                'IstitutoFinanziario' => $this->getIstitutoFinanziario(),
                'IBAN' => $this->getIBAN(),
                'ABI' => $this->getABI(),
                'CAB' => $this->getCAB(),
                'BIC' => $this->getBIC(),
                'ScontoPagamentoAnticipato' => $this->getScontoPagamentoAnticipato(),
                'DataLimitePagamentoAnticipato' => $this->getDataLimitePagamentoAnticipato(),
                'PenalitaPagamentiRitardati' => $this->getPenalitaPagamentiRitardati(),
                'DataDecorrenzaPenale' => $this->getDataDecorrenzaPenale(),
                'CodicePagamento' => $this->getCodicePagamento(),
            ]
        ];
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

        foreach ($array['DettaglioPagamento'] as $k => $v) {
            $m = 'set' . $k;
            $o->{$m}($v);
        }

        return $o;
    }

}