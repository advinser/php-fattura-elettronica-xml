<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-05
 * Time:         10:11
 */

namespace Advinser\FatturaElettronicaXml\Body;


use Advinser\FatturaElettronicaXml\FatturaElettronicaException;

class DettaglioPagamento
{
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
     * @return string|null
     */
    public function getBeneficiario(): ?string
    {
        return $this->Beneficiario;
    }

    /**
     * @param string|null $Beneficiario
     */
    public function setBeneficiario(?string $Beneficiario): void
    {
        $this->Beneficiario = $Beneficiario;
    }

    /**
     * @return string|null
     */
    public function getModalitaPagamento(): ?string
    {
        return $this->ModalitaPagamento;
    }

    /**
     * @param string|null $ModalitaPagamento
     */
    public function setModalitaPagamento(?string $ModalitaPagamento): void
    {
        $this->ModalitaPagamento = $ModalitaPagamento;
    }

    /**
     * @return string|null
     */
    public function getDataRiferimentoTerminiPagamento(): ?string
    {
        return $this->DataRiferimentoTerminiPagamento;
    }

    /**
     * @param string|null $DataRiferimentoTerminiPagamento
     */
    public function setDataRiferimentoTerminiPagamento(?string $DataRiferimentoTerminiPagamento): void
    {
        $this->DataRiferimentoTerminiPagamento = $DataRiferimentoTerminiPagamento;
    }

    /**
     * @return string|null
     */
    public function getGiorniTerminiPagamento(): ?string
    {
        return $this->GiorniTerminiPagamento;
    }

    /**
     * @param string|null $GiorniTerminiPagamento
     */
    public function setGiorniTerminiPagamento(?string $GiorniTerminiPagamento): void
    {
        $this->GiorniTerminiPagamento = $GiorniTerminiPagamento;
    }

    /**
     * @return string|null
     */
    public function getDataScadenzaPagamento(): ?string
    {
        return $this->DataScadenzaPagamento;
    }

    /**
     * @param string|null $DataScadenzaPagamento
     */
    public function setDataScadenzaPagamento(?string $DataScadenzaPagamento): void
    {
        $this->DataScadenzaPagamento = $DataScadenzaPagamento;
    }

    /**
     * @return string|null
     */
    public function getImportoPagamento(): ?string
    {
        return $this->ImportoPagamento;
    }

    /**
     * @param string|null $ImportoPagamento
     */
    public function setImportoPagamento(?string $ImportoPagamento): void
    {
        $this->ImportoPagamento = $ImportoPagamento;
    }

    /**
     * @return string|null
     */
    public function getCodUfficioPostale(): ?string
    {
        return $this->CodUfficioPostale;
    }

    /**
     * @param string|null $CodUfficioPostale
     */
    public function setCodUfficioPostale(?string $CodUfficioPostale): void
    {
        $this->CodUfficioPostale = $CodUfficioPostale;
    }

    /**
     * @return string|null
     */
    public function getCognomeQuietanzante(): ?string
    {
        return $this->CognomeQuietanzante;
    }

    /**
     * @param string|null $CognomeQuietanzante
     */
    public function setCognomeQuietanzante(?string $CognomeQuietanzante): void
    {
        $this->CognomeQuietanzante = $CognomeQuietanzante;
    }

    /**
     * @return string|null
     */
    public function getNomeQuietanzante(): ?string
    {
        return $this->NomeQuietanzante;
    }

    /**
     * @param string|null $NomeQuietanzante
     */
    public function setNomeQuietanzante(?string $NomeQuietanzante): void
    {
        $this->NomeQuietanzante = $NomeQuietanzante;
    }

    /**
     * @return string|null
     */
    public function getCFQuietanzante(): ?string
    {
        return $this->CFQuietanzante;
    }

    /**
     * @param string|null $CFQuietanzante
     */
    public function setCFQuietanzante(?string $CFQuietanzante): void
    {
        $this->CFQuietanzante = $CFQuietanzante;
    }

    /**
     * @return string|null
     */
    public function getTitoloQuietanzante(): ?string
    {
        return $this->TitoloQuietanzante;
    }

    /**
     * @param string|null $TitoloQuietanzante
     */
    public function setTitoloQuietanzante(?string $TitoloQuietanzante): void
    {
        $this->TitoloQuietanzante = $TitoloQuietanzante;
    }

    /**
     * @return string|null
     */
    public function getIstitutoFinanziario(): ?string
    {
        return $this->IstitutoFinanziario;
    }

    /**
     * @param string|null $IstitutoFinanziario
     */
    public function setIstitutoFinanziario(?string $IstitutoFinanziario): void
    {
        $this->IstitutoFinanziario = $IstitutoFinanziario;
    }

    /**
     * @return string|null
     */
    public function getIBAN(): ?string
    {
        return $this->IBAN;
    }

    /**
     * @param string|null $IBAN
     */
    public function setIBAN(?string $IBAN): void
    {
        $this->IBAN = $IBAN;
    }

    /**
     * @return string|null
     */
    public function getABI(): ?string
    {
        return $this->ABI;
    }

    /**
     * @param string|null $ABI
     */
    public function setABI(?string $ABI): void
    {
        $this->ABI = $ABI;
    }

    /**
     * @return string|null
     */
    public function getCAB(): ?string
    {
        return $this->CAB;
    }

    /**
     * @param string|null $CAB
     */
    public function setCAB(?string $CAB): void
    {
        $this->CAB = $CAB;
    }

    /**
     * @return string|null
     */
    public function getBIC(): ?string
    {
        return $this->BIC;
    }

    /**
     * @param string|null $BIC
     */
    public function setBIC(?string $BIC): void
    {
        $this->BIC = $BIC;
    }

    /**
     * @return string|null
     */
    public function getScontoPagamentoAnticipato(): ?string
    {
        return $this->ScontoPagamentoAnticipato;
    }

    /**
     * @param string|null $ScontoPagamentoAnticipato
     */
    public function setScontoPagamentoAnticipato(?string $ScontoPagamentoAnticipato): void
    {
        $this->ScontoPagamentoAnticipato = $ScontoPagamentoAnticipato;
    }

    /**
     * @return string|null
     */
    public function getDataLimitePagamentoAnticipato(): ?string
    {
        return $this->DataLimitePagamentoAnticipato;
    }

    /**
     * @param string|null $DataLimitePagamentoAnticipato
     */
    public function setDataLimitePagamentoAnticipato(?string $DataLimitePagamentoAnticipato): void
    {
        $this->DataLimitePagamentoAnticipato = $DataLimitePagamentoAnticipato;
    }

    /**
     * @return string|null
     */
    public function getPenalitaPagamentiRitardati(): ?string
    {
        return $this->PenalitaPagamentiRitardati;
    }

    /**
     * @param string|null $PenalitaPagamentiRitardati
     */
    public function setPenalitaPagamentiRitardati(?string $PenalitaPagamentiRitardati): void
    {
        $this->PenalitaPagamentiRitardati = $PenalitaPagamentiRitardati;
    }

    /**
     * @return string|null
     */
    public function getDataDecorrenzaPenale(): ?string
    {
        return $this->DataDecorrenzaPenale;
    }

    /**
     * @param string|null $DataDecorrenzaPenale
     */
    public function setDataDecorrenzaPenale(?string $DataDecorrenzaPenale): void
    {
        $this->DataDecorrenzaPenale = $DataDecorrenzaPenale;
    }

    /**
     * @return string|null
     */
    public function getCodicePagamento(): ?string
    {
        return $this->CodicePagamento;
    }

    /**
     * @param string|null $CodicePagamento
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
        ];
        return $array;
    }

    /**
     * @param $array
     * @return DettaglioPagamento
     * @throws FatturaElettronicaException
     */
    public static function fromArray($array): DettaglioPagamento
    {
        $o = new DettaglioPagamento();

        foreach ($array as $k => $v) {
            $m = 'set' . $k;
            $o->{$m}($v);
        }

        return $o;
    }
}