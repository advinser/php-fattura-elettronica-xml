<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:08
 */

namespace Advinser\FatturaElettronicaXml\Header;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Structures\Anagrafica;
use Advinser\FatturaElettronicaXml\Structures\Fiscale;
use Advinser\FatturaElettronicaXml\Structures\Indirizzo;
use Advinser\FatturaElettronicaXml\Structures\SoggettiHeader;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;
use Advinser\FatturaElettronicaXml\Validation\Validators\VCodiceFiscale;

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
        $this->CodiceFiscale = strtoupper($CodiceFiscale);
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
        return $array;
    }

    /**
     * @param array $array
     * @return TerzoIntermediarioOSoggettoEmittente
     */
    public static function fromArray(array $array):TerzoIntermediarioOSoggettoEmittente
    {
        $o = new TerzoIntermediarioOSoggettoEmittente();
        if(!empty($array['DatiAnagrafici']['IdFiscaleIVA'])){
            $o->setIdFiscaleIVA(Fiscale::fromArray($array['DatiAnagrafici']['IdFiscaleIVA']));
        }
        if(!empty($array['DatiAnagrafici']['CodiceFiscale'])){
            $o->setCodiceFiscale($array['DatiAnagrafici']['CodiceFiscale']);
        }
        if(!empty($array['DatiAnagrafici']['Anagrafica'])){
            $o->setAnagrafica(Anagrafica::fromArray($array['DatiAnagrafici']['Anagrafica']));
        }

        return $o;
    }

    /**
     * @param $array
     * @param ValidateErrorContainer $errorContainer
     */
    public static function validate($array,ValidateErrorContainer $errorContainer){
        if(empty($array['DatiAnagrafici']['IdFiscaleIVA'])){
            $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Invalid value for 'RegimeFiscale', it can't be null or empty",'TerzoIntermediarioOSoggettoEmittente::01',__LINE__));
        }else{
            Fiscale::validate($array['DatiAnagrafici']['IdFiscaleIVA'],$errorContainer,'TerzoIntermediarioOSoggettoEmittente::');
        }

        if(!empty($array['CodiceFiscale'])){
            VCodiceFiscale::validate($array['CodiceFiscale'],$errorContainer,'TerzoIntermediarioOSoggettoEmittente::');
        }

        if(empty($array['DatiAnagrafici']['Anagrafica'])){
            $errorContainer->addError(new ValidateError('Obect',FatturaElettronica::ERROR_LEVEL_REQUIRED,"Invalid value for 'Anagrafica', it can't be null or empty",'TerzoIntermediarioOSoggettoEmittente::02',__LINE__));
        }else{
            Anagrafica::validate($array['DatiAnagrafici']['Anagrafica'],$errorContainer,'TerzoIntermediarioOSoggettoEmittente::');
        }

    }
}