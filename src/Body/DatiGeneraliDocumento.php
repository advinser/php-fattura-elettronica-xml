<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         16:33
 */

namespace FatturaElettronicaXml\Body;
use FatturaElettronicaXml\FatturaElettronicaException;

class DatiGeneraliDocumento
{
    /**
     * @var string|null
     */
    private $TipoDocumento;
    /**
     * @var string|null
     */
    private $Divisa;
    /**
     * @var string|null
     */
    private $Data;
    /**
     * @var string|null
     */
    private $Numero;

    /**
     * DatiRitenura
     */
    /**
     * @var string|null
     */
    private $TipoRitenuta;
    /**
     * @var string|null
     */
    private $ImportoRitenuta;
    /**
     * @var string|null
     */
    private $AliquotaRitenuta;
    /**
     * @var string|null
     */
    private $CausalePagamento;

    /**
     * DatiBollo
     */
    /**
     * @var string|null
     */
    private $BolloVirtuale;
    /**
     * @var string|null
     */
    private $ImportoBollo;
    /**
     * DatiBollo
     */

    /**
     * DatiCassaPrevidenziale
     */
    /**
     * @var string|null;
     */
    private $TipoCassa;
    /**
     * @var string|null;
     */
    private $AlCassa;
    /**
     * @var string|null;
     */
    private $ImportoContributoCassa;
    /**
     * @var string|null;
     */
    private $ImponibileCassa;
    /**
     * @var string|null;
     */
    private $AliquotaIVA;
    /**
     * @var string|null;
     */
    private $Ritenuta;
    /**
     * @var string|null;
     */
    private $Natura;
    /**
     * @var string|null;
     */
    private $RiferimentoAmministrazione;
    /**
     * DatiCassaPrevidenziale
     */

    /**
     * ScontoMaggiorazione
     */
    /**
     * @var string|null;
     */
    private $ScontoTipo;
    /**
     * @var string|null;
     */
    private $ScontoPercentuale;
    /**
     * @var string|null;
     */
    private $ScontoImporto;

    /**
     * ScontoMaggiorazione
     */

    /**
     * @var string|null;
     */
    private $ImportoTotaleDocumento;
    /**
     * @var string|null;
     */
    private $Arrotondamento;
    /**
     * @var string|null;
     */
    private $Causale;
    /**
     * @var boolean;
     */
    private $Art73 = false;

    /**
     * @return null|string
     */
    public function getTipoDocumento(): ?string
    {
        return $this->TipoDocumento;
    }

    /**
     * @param null|string $TipoDocumento
     * @return DatiGeneraliDocumento
     */
    public function setTipoDocumento(?string $TipoDocumento): DatiGeneraliDocumento
    {
        $this->TipoDocumento = $TipoDocumento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDivisa(): ?string
    {
        return $this->Divisa;
    }

    /**
     * @param null|string $Divisa
     * @return DatiGeneraliDocumento
     */
    public function setDivisa(?string $Divisa): DatiGeneraliDocumento
    {
        $this->Divisa = $Divisa;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getData(): ?string
    {
        return $this->Data;
    }

    /**
     * @param null|string $Data
     * @return DatiGeneraliDocumento
     */
    public function setData(?string $Data): DatiGeneraliDocumento
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    /**
     * @param null|string $Numero
     * @return DatiGeneraliDocumento
     */
    public function setNumero(?string $Numero): DatiGeneraliDocumento
    {
        $this->Numero = $Numero;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTipoRitenuta(): ?string
    {
        return $this->TipoRitenuta;
    }

    /**
     * @param null|string $TipoRitenuta
     * @return DatiGeneraliDocumento
     */
    public function setTipoRitenuta(?string $TipoRitenuta): DatiGeneraliDocumento
    {
        $this->TipoRitenuta = $TipoRitenuta;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getImportoRitenuta(): ?string
    {
        return $this->ImportoRitenuta;
    }

    /**
     * @param null|string $ImportoRitenuta
     * @return DatiGeneraliDocumento
     */
    public function setImportoRitenuta(?string $ImportoRitenuta): DatiGeneraliDocumento
    {
        $this->ImportoRitenuta = $ImportoRitenuta;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAliquotaRitenuta(): ?string
    {
        return $this->AliquotaRitenuta;
    }

    /**
     * @param null|string $AliquotaRitenuta
     * @return DatiGeneraliDocumento
     */
    public function setAliquotaRitenuta(?string $AliquotaRitenuta): DatiGeneraliDocumento
    {
        $this->AliquotaRitenuta = $AliquotaRitenuta;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCausalePagamento(): ?string
    {
        return $this->CausalePagamento;
    }

    /**
     * @param null|string $CausalePagamento
     * @return DatiGeneraliDocumento
     */
    public function setCausalePagamento(?string $CausalePagamento): DatiGeneraliDocumento
    {
        $this->CausalePagamento = $CausalePagamento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getBolloVirtuale(): ?string
    {
        return $this->BolloVirtuale;
    }

    /**
     * @param null|string $BolloVirtuale
     * @return DatiGeneraliDocumento
     */
    public function setBolloVirtuale(?string $BolloVirtuale): DatiGeneraliDocumento
    {
        $this->BolloVirtuale = $BolloVirtuale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getImportoBollo(): ?string
    {
        return $this->ImportoBollo;
    }

    /**
     * @param null|string $ImportoBollo
     * @return DatiGeneraliDocumento
     */
    public function setImportoBollo(?string $ImportoBollo): DatiGeneraliDocumento
    {
        $this->ImportoBollo = $ImportoBollo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTipoCassa(): ?string
    {
        return $this->TipoCassa;
    }

    /**
     * @param null|string $TipoCassa
     * @return DatiGeneraliDocumento
     */
    public function setTipoCassa(?string $TipoCassa): DatiGeneraliDocumento
    {
        $this->TipoCassa = $TipoCassa;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAlCassa(): ?string
    {
        return $this->AlCassa;
    }

    /**
     * @param null|string $AlCassa
     * @return DatiGeneraliDocumento
     */
    public function setAlCassa(?string $AlCassa): DatiGeneraliDocumento
    {
        $this->AlCassa = $AlCassa;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getImportoContributoCassa(): ?string
    {
        return $this->ImportoContributoCassa;
    }

    /**
     * @param null|string $ImportoContributoCassa
     * @return DatiGeneraliDocumento
     */
    public function setImportoContributoCassa(?string $ImportoContributoCassa): DatiGeneraliDocumento
    {
        $this->ImportoContributoCassa = $ImportoContributoCassa;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getImponibileCassa(): ?string
    {
        return $this->ImponibileCassa;
    }

    /**
     * @param null|string $ImponibileCassa
     * @return DatiGeneraliDocumento
     */
    public function setImponibileCassa(?string $ImponibileCassa): DatiGeneraliDocumento
    {
        $this->ImponibileCassa = $ImponibileCassa;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAliquotaIVA(): ?string
    {
        return $this->AliquotaIVA;
    }

    /**
     * @param null|string $AliquotaIVA
     * @return DatiGeneraliDocumento
     */
    public function setAliquotaIVA(?string $AliquotaIVA): DatiGeneraliDocumento
    {
        $this->AliquotaIVA = $AliquotaIVA;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRitenuta(): ?string
    {
        return $this->Ritenuta;
    }

    /**
     * @param null|string $Ritenuta
     * @return DatiGeneraliDocumento
     */
    public function setRitenuta(?string $Ritenuta): DatiGeneraliDocumento
    {
        $this->Ritenuta = $Ritenuta;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNatura(): ?string
    {
        return $this->Natura;
    }

    /**
     * @param null|string $Natura
     * @return DatiGeneraliDocumento
     */
    public function setNatura(?string $Natura): DatiGeneraliDocumento
    {
        $this->Natura = $Natura;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRiferimentoAmministrazione(): ?string
    {
        return $this->RiferimentoAmministrazione;
    }

    /**
     * @param null|string $RiferimentoAmministrazione
     * @return DatiGeneraliDocumento
     */
    public function setRiferimentoAmministrazione(?string $RiferimentoAmministrazione): DatiGeneraliDocumento
    {
        $this->RiferimentoAmministrazione = $RiferimentoAmministrazione;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getScontoTipo(): ?string
    {
        return $this->ScontoTipo;
    }

    /**
     * @param null|string $ScontoTipo
     * @return DatiGeneraliDocumento
     */
    public function setScontoTipo(?string $ScontoTipo): DatiGeneraliDocumento
    {
        $this->ScontoTipo = $ScontoTipo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getScontoPercentuale(): ?string
    {
        return $this->ScontoPercentuale;
    }

    /**
     * @param null|string $ScontoPercentuale
     * @return DatiGeneraliDocumento
     */
    public function setScontoPercentuale(?string $ScontoPercentuale): DatiGeneraliDocumento
    {
        $this->ScontoPercentuale = $ScontoPercentuale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getScontoImporto(): ?string
    {
        return $this->ScontoImporto;
    }

    /**
     * @param null|string $ScontoImporto
     * @return DatiGeneraliDocumento
     */
    public function setScontoImporto(?string $ScontoImporto): DatiGeneraliDocumento
    {
        $this->ScontoImporto = $ScontoImporto;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getImportoTotaleDocumento(): ?string
    {
        return $this->ImportoTotaleDocumento;
    }

    /**
     * @param null|string $ImportoTotaleDocumento
     * @return DatiGeneraliDocumento
     */
    public function setImportoTotaleDocumento(?string $ImportoTotaleDocumento): DatiGeneraliDocumento
    {
        $this->ImportoTotaleDocumento = $ImportoTotaleDocumento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getArrotondamento(): ?string
    {
        return $this->Arrotondamento;
    }

    /**
     * @param null|string $Arrotondamento
     * @return DatiGeneraliDocumento
     */
    public function setArrotondamento(?string $Arrotondamento): DatiGeneraliDocumento
    {
        $this->Arrotondamento = $Arrotondamento;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCausale(): ?string
    {
        return $this->Causale;
    }

    /**
     * @param null|string $Causale
     * @return DatiGeneraliDocumento
     */
    public function setCausale(?string $Causale): DatiGeneraliDocumento
    {
        $this->Causale = $Causale;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getArt73(): bool
    {
        return $this->Art73;
    }

    /**
     * @param boolean $Art73
     * @return DatiGeneraliDocumento
     */
    public function setArt73(bool $Art73): DatiGeneraliDocumento
    {
        $this->Art73 = $Art73;
        return $this;
    }




    /**
     * @return array
     */
    public function toArray()
    {
        $array = [
            'TipoDocumento' => null,
            'Divisa' => null,
            'Data' => null,
            'Numero' => null,
            'DatiRitenuta' => null,
            'DatiBollo' => null,
            'DatiCassaPrevidenziale' => null,
            'ScontoMaggiorazione' => null,
            'ImportoTotaleDocumento' => null,
            'Arrotondamento' => null,
            'Causale' => null,
            'Art73' => null,
        ];

        if(empty($this->getTipoDocumento())){
            throw new FatturaElettronicaException("missing 'TipoDocumento'", 'FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento');
        }else{
            $array['TipoDocumento'] = $this->getTipoDocumento();
        }

        if(empty($this->getDivisa())){
            throw new FatturaElettronicaException("missing 'Divisa'", 'FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento');
        }else{
            $array['Divisa'] = $this->getDivisa();
        }

        if(empty($this->getData())){
            throw new FatturaElettronicaException("missing 'Data'", 'FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento');
        }else{
            //todo aggiungere validatore data
            $array['Data'] = $this->getData();
        }

        if(empty($this->getNumero())){
            throw new FatturaElettronicaException("missing 'Numero'", 'FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento');
        }else{
            $array['Numero'] = $this->getNumero();
        }

        if(!empty($this->getTipoRitenuta())){
            $array['DatiRitenuta']['TipoRitenuta'] = $this->getTipoRitenuta();
        }
        if(!empty($this->getImportoRitenuta())){
            $array['DatiRitenuta']['ImportoRitenuta'] = $this->getImportoRitenuta();
        }
        if(!empty($this->getAliquotaRitenuta())){
            $array['DatiRitenuta']['AliquotaRitenuta'] = $this->getAliquotaRitenuta();
        }
        if(!empty($this->getCausalePagamento())){
            $array['DatiRitenuta']['CausalePagamento'] = $this->getCausalePagamento();
        }


        if(!empty($this->getBolloVirtuale())){
            $array['DatiBollo']['BolloVirtuale'] = $this->getBolloVirtuale();
        }
        if(!empty($this->getImportoBollo())){
            $array['DatiBollo']['ImportoBollo'] = $this->getImportoBollo();
        }


        if(!empty($this->getTipoCassa())){
            $array['DatiCassaPrevidenziale']['TipoCassa'] = $this->getTipoCassa();
        }
        if(!empty($this->getAlCassa())){
            $array['DatiCassaPrevidenziale']['AlCassa'] = $this->getAlCassa();
        }
        if(!empty($this->getImportoContributoCassa())){
            $array['DatiCassaPrevidenziale']['ImportoContributoCassa'] = $this->getImportoContributoCassa();
        }
        if(!empty($this->getImponibileCassa())){
            $array['DatiCassaPrevidenziale']['ImponibileCassa'] = $this->getImponibileCassa();
        }
        if(!empty($this->getAliquotaIVA())){
            $array['DatiCassaPrevidenziale']['AliquotaIVA'] = $this->getAliquotaIVA();
        }
        if(!empty($this->getRitenuta())){
            $array['DatiCassaPrevidenziale']['Ritenuta'] = $this->getRitenuta();
        }
        if(!empty($this->getNatura())){
            $array['DatiCassaPrevidenziale']['Natura'] = $this->getNatura();
        }
        if(!empty($this->getRiferimentoAmministrazione())){
            $array['DatiCassaPrevidenziale']['RiferimentoAmministrazione'] = $this->getRiferimentoAmministrazione();
        }


        if(!empty($this->getScontoTipo())){
            $array['ScontoMaggiorazione']['Tipo'] = $this->getScontoTipo();
        }
        if(!empty($this->getScontoPercentuale())){
            $array['ScontoMaggiorazione']['Percentuale'] = $this->getScontoPercentuale();
        }
        if(!empty($this->getScontoImporto())){
            $array['ScontoMaggiorazione']['Importo'] = $this->getScontoImporto();
        }

        if($this->getImportoTotaleDocumento() === null){
            $array['ImportoTotaleDocumento'] = '0.0';
        }else{
            $array['ImportoTotaleDocumento'] = $this->getImportoTotaleDocumento();
        }
        if($this->getArrotondamento() === null){
            $array['Arrotondamento'] = '0.0';
        }else{
            $array['Arrotondamento'] = $this->getArrotondamento();
        }
        if(!empty($this->getCausale())){
            $array['Causale'] = $this->getCausale();
        }

        if($this->getArt73()){
            $array['Art73'] = 'SI';
        }



        return array_filter($array);
    }

}