<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:07
 */

namespace Advinser\FatturaElettronicaXml\Header;


use Advinser\FatturaElettronicaXml\Structures\Anagrafica;
use Advinser\FatturaElettronicaXml\Structures\Fiscale;

class RappresentanteFiscale
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
     * @return RappresentanteFiscale
     */
    public function setIdFiscaleIVA(Fiscale $IdFiscaleIVA): RappresentanteFiscale
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
     * @return RappresentanteFiscale
     */
    public function setCodiceFiscale(string $CodiceFiscale): RappresentanteFiscale
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
     * @return RappresentanteFiscale
     */
    public function setAnagrafica(Anagrafica $Anagrafica): RappresentanteFiscale
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
     * @return RappresentanteFiscale
     */
    public static function fromArray(array $array){
        $o = new RappresentanteFiscale();

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


}