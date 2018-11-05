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
     * @param mixed $CondizioniPagamento
     */
    public function setCondizioniPagamento($CondizioniPagamento): void
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
     */
    public function setBeneficiario(?string $Beneficiario): void
    {
        $this->Beneficiario = $Beneficiario;
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
     */
    public function setModalitaPagamento(?string $ModalitaPagamento): void
    {
        $this->ModalitaPagamento = $ModalitaPagamento;
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
     */
    public function setDataRiferimentoTerminiPagamento(?string $DataRiferimentoTerminiPagamento): void
    {
        $this->DataRiferimentoTerminiPagamento = $DataRiferimentoTerminiPagamento;
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
     */
    public function setGiorniTerminiPagamento(?string $GiorniTerminiPagamento): void
    {
        $this->GiorniTerminiPagamento = $GiorniTerminiPagamento;
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
     */
    public function setDataScadenzaPagamento(?string $DataScadenzaPagamento): void
    {
        $this->DataScadenzaPagamento = $DataScadenzaPagamento;
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
     */
    public function setImportoPagamento(?string $ImportoPagamento): void
    {
        $this->ImportoPagamento = $ImportoPagamento;
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
     */
    public function setCodUfficioPostale(?string $CodUfficioPostale): void
    {
        $this->CodUfficioPostale = $CodUfficioPostale;
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
     */
    public function setCognomeQuietanzante(?string $CognomeQuietanzante): void
    {
        $this->CognomeQuietanzante = $CognomeQuietanzante;
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
     */
    public function setNomeQuietanzante(?string $NomeQuietanzante): void
    {
        $this->NomeQuietanzante = $NomeQuietanzante;
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
     */
    public function setCFQuietanzante(?string $CFQuietanzante): void
    {
        $this->CFQuietanzante = $CFQuietanzante;
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
     */
    public function setTitoloQuietanzante(?string $TitoloQuietanzante): void
    {
        $this->TitoloQuietanzante = $TitoloQuietanzante;
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
     */
    public function setIstitutoFinanziario(?string $IstitutoFinanziario): void
    {
        $this->IstitutoFinanziario = $IstitutoFinanziario;
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
     */
    public function setIBAN(?string $IBAN): void
    {
        $this->IBAN = $IBAN;
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
     */
    public function setABI(?string $ABI): void
    {
        $this->ABI = $ABI;
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
     */
    public function setCAB(?string $CAB): void
    {
        $this->CAB = $CAB;
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
     */
    public function setBIC(?string $BIC): void
    {
        $this->BIC = $BIC;
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
     */
    public function setScontoPagamentoAnticipato(?string $ScontoPagamentoAnticipato): void
    {
        $this->ScontoPagamentoAnticipato = $ScontoPagamentoAnticipato;
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
     */
    public function setDataLimitePagamentoAnticipato(?string $DataLimitePagamentoAnticipato): void
    {
        $this->DataLimitePagamentoAnticipato = $DataLimitePagamentoAnticipato;
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
     */
    public function setPenalitaPagamentiRitardati(?string $PenalitaPagamentiRitardati): void
    {
        $this->PenalitaPagamentiRitardati = $PenalitaPagamentiRitardati;
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
     */
    public function setDataDecorrenzaPenale(?string $DataDecorrenzaPenale): void
    {
        $this->DataDecorrenzaPenale = $DataDecorrenzaPenale;
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
     */
    public function setCodicePagamento(?string $CodicePagamento): void
    {
        $this->CodicePagamento = $CodicePagamento;
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
                'ImportoPagamento' => !empty($this->getImportoPagamento()) ? number_format($this->getImportoPagamento(),2,'.','') : null,
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


    public static function fromArray($array): DatiPagamento
    {
        $o = new DatiPagamento();

        if(!empty($array['CondizioniPagamento'])){
            $o->setCondizioniPagamento($array['CondizioniPagamento']);
        }

        foreach ($array['DettaglioPagamento'] as $k => $v) {
            $m = 'set' . $k;
            $o->{$m}($v);
        }

        return $o;
    }

}