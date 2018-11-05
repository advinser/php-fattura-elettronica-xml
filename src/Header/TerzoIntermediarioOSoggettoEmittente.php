<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:08
 */

namespace FatturaElettronicaXml\Header;


use FatturaElettronicaXml\Structures\Anagrafica;
use FatturaElettronicaXml\Structures\Fiscale;
use FatturaElettronicaXml\Structures\Indirizzo;
use FatturaElettronicaXml\Structures\SoggettiHeader;

class TerzoIntermediarioOSoggettoEmittente
{
    /**
     * @var Fiscale
     */
    protected $IdFiscaleIVA;
    /**
     * @var string
     */
    protected $CodiceFiscale;

    /**
     * @var Anagrafica
     */
    protected $Anagrafica;

    /**
     * @return Fiscale
     */
    public function getIdFiscaleIVA(): Fiscale
    {
        return $this->IdFiscaleIVA;
    }

    /**
     * @param Fiscale $IdFiscaleIVA
     * @return TerzoIntermediarioOSoggettoEmittente
     */
    public function setIdFiscaleIVA(Fiscale $IdFiscaleIVA): TerzoIntermediarioOSoggettoEmittente
    {
        $this->IdFiscaleIVA = $IdFiscaleIVA;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodiceFiscale(): string
    {
        return $this->CodiceFiscale;
    }

    /**
     * @param string $CodiceFiscale
     * @return TerzoIntermediarioOSoggettoEmittente
     */
    public function setCodiceFiscale(string $CodiceFiscale): TerzoIntermediarioOSoggettoEmittente
    {
        $this->CodiceFiscale = $CodiceFiscale;
        return $this;
    }

    /**
     * @return Anagrafica
     */
    public function getAnagrafica(): Anagrafica
    {
        return $this->Anagrafica;
    }

    /**
     * @param Anagrafica $Anagrafica
     * @return TerzoIntermediarioOSoggettoEmittente
     */
    public function setAnagrafica(Anagrafica $Anagrafica): TerzoIntermediarioOSoggettoEmittente
    {
        $this->Anagrafica = $Anagrafica;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(){
        $array['DatiAnagrafici'] = [
            'IdFiscaleIVA' => $this->getIdFiscaleIVA()->toArray(),
            'CodiceFiscale' => $this->getCodiceFiscale(),
            'Anagrafica' => $this->getAnagrafica()->toArray(),
        ];
        return array_filter($array);
    }
}