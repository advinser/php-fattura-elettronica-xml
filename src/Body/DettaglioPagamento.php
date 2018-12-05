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
     * @return DettaglioPagamento
     */
    public function setBeneficiario(?string $Beneficiario): DettaglioPagamento
    {
        $this->Beneficiario = $Beneficiario;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setModalitaPagamento(?string $ModalitaPagamento): DettaglioPagamento
    {
        $this->ModalitaPagamento = $ModalitaPagamento;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setDataRiferimentoTerminiPagamento(?string $DataRiferimentoTerminiPagamento): DettaglioPagamento
    {
        $this->DataRiferimentoTerminiPagamento = $DataRiferimentoTerminiPagamento;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setGiorniTerminiPagamento(?string $GiorniTerminiPagamento): DettaglioPagamento
    {
        $this->GiorniTerminiPagamento = $GiorniTerminiPagamento;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setDataScadenzaPagamento(?string $DataScadenzaPagamento): DettaglioPagamento
    {
        $this->DataScadenzaPagamento = $DataScadenzaPagamento;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setImportoPagamento(?string $ImportoPagamento): DettaglioPagamento
    {
        $this->ImportoPagamento = $ImportoPagamento;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setCodUfficioPostale(?string $CodUfficioPostale): DettaglioPagamento
    {
        $this->CodUfficioPostale = $CodUfficioPostale;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setCognomeQuietanzante(?string $CognomeQuietanzante): DettaglioPagamento
    {
        $this->CognomeQuietanzante = $CognomeQuietanzante;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setNomeQuietanzante(?string $NomeQuietanzante): DettaglioPagamento
    {
        $this->NomeQuietanzante = $NomeQuietanzante;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setCFQuietanzante(?string $CFQuietanzante): DettaglioPagamento
    {
        $this->CFQuietanzante = $CFQuietanzante;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setTitoloQuietanzante(?string $TitoloQuietanzante): DettaglioPagamento
    {
        $this->TitoloQuietanzante = $TitoloQuietanzante;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setIstitutoFinanziario(?string $IstitutoFinanziario): DettaglioPagamento
    {
        $this->IstitutoFinanziario = $IstitutoFinanziario;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setIBAN(?string $IBAN): DettaglioPagamento
    {
        $this->IBAN = $IBAN;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setABI(?string $ABI): DettaglioPagamento
    {
        $this->ABI = $ABI;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setCAB(?string $CAB): DettaglioPagamento
    {
        $this->CAB = $CAB;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setBIC(?string $BIC): DettaglioPagamento
    {
        $this->BIC = $BIC;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setScontoPagamentoAnticipato(?string $ScontoPagamentoAnticipato): DettaglioPagamento
    {
        $this->ScontoPagamentoAnticipato = $ScontoPagamentoAnticipato;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setDataLimitePagamentoAnticipato(?string $DataLimitePagamentoAnticipato): DettaglioPagamento
    {
        $this->DataLimitePagamentoAnticipato = $DataLimitePagamentoAnticipato;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setPenalitaPagamentiRitardati(?string $PenalitaPagamentiRitardati): DettaglioPagamento
    {
        $this->PenalitaPagamentiRitardati = $PenalitaPagamentiRitardati;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setDataDecorrenzaPenale(?string $DataDecorrenzaPenale): DettaglioPagamento
    {
        $this->DataDecorrenzaPenale = $DataDecorrenzaPenale;
        return $this;
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
     * @return DettaglioPagamento
     */
    public function setCodicePagamento(?string $CodicePagamento): DettaglioPagamento
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