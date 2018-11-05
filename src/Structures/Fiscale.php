<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         10:34
 */

namespace FatturaElettronicaXml\Structures;


class Fiscale
{
    /**
     * @var string
     */
    private $IdPaese;
    /**
     * @var string
     */
    private $IdCodice;

    /**
     * Fiscale constructor.
     * @param string $IdPaese
     * @param string $IdCodice
     */
    public function __construct(string $IdPaese = null, string $IdCodice = null)
    {
        $this->IdPaese = $IdPaese;
        $this->IdCodice = $IdCodice;
    }

    /**
     * @return string
     */
    public function getIdPaese(): string
    {
        return $this->IdPaese;
    }

    /**
     * @param string $IdPaese
     * @return Fiscale
     */
    public function setIdPaese(string $IdPaese): Fiscale
    {
        $this->IdPaese = $IdPaese;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdCodice(): string
    {
        return $this->IdCodice;
    }

    /**
     * @param string $IdCodice
     * @return Fiscale
     */
    public function setIdCodice(string $IdCodice): Fiscale
    {
        $this->IdCodice = $IdCodice;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'IdPaese' => $this->getIdPaese(),
            'IdCodice' => $this->getIdCodice(),
        ];
    }

    /**
     * @param $array
     * @return Fiscale
     */
    public static function fromArray($array): Fiscale
    {
        $o = new Fiscale();

        foreach ($array as $k => $v) {
            $m = 'set' . $k;
            $o->{$m}($v);
        }

        return $o;
    }

}