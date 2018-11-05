<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         19:06
 */

namespace FatturaElettronicaXml\Header;


use FatturaElettronicaXml\Structures\Fiscale;
use FatturaElettronicaXml\FatturaElettronicaException;

class DatiTrasmissione
{
    /**
     * @var Fiscale
     */
    private $IdTrasmittente;
    /**
     * @var string
     */
    private $ProgressivoInvio;
    /**
     * @var string
     */
    private $FormatoTrasmissione;
    /**
     * @var string
     */
    private $CodiceDestinatario = '0000000';
    /**
     * @var string
     */
    private $Telefono;
    /**
     * @var string
     */
    private $Email;
    /**
     * @var string
     */
    private $PECDestinatario;

    /**
     * DatiTrasmissione constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return Fiscale
     */
    public function getIdTrasmittente(): Fiscale
    {
        return $this->IdTrasmittente;
    }

    /**
     * @param Fiscale $IdTrasmittente
     * @return DatiTrasmissione
     */
    public function setIdTrasmittente(Fiscale $IdTrasmittente): DatiTrasmissione
    {
        $this->IdTrasmittente = $IdTrasmittente;
        return $this;
    }

    /**
     * @return string
     */
    public function getProgressivoInvio(): string
    {
        return $this->ProgressivoInvio;
    }

    /**
     * @param string $ProgressivoInvio
     * @return DatiTrasmissione
     */
    public function setProgressivoInvio(string $ProgressivoInvio): DatiTrasmissione
    {
        if (strlen($ProgressivoInvio) < 10) {
            $this->ProgressivoInvio = str_pad($ProgressivoInvio, 10, '0', STR_PAD_LEFT);
        } else {
            $this->ProgressivoInvio = $ProgressivoInvio;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getFormatoTrasmissione(): string
    {
        return $this->FormatoTrasmissione;
    }

    /**
     * @param string $FormatoTrasmissione
     * @return DatiTrasmissione
     * @throws FatturaElettronicaException
     */
    public function setFormatoTrasmissione(string $FormatoTrasmissione): DatiTrasmissione
    {
        switch ($FormatoTrasmissione) {
            case 'FPA12':
            case 'FPR12':
                $this->FormatoTrasmissione = $FormatoTrasmissione;
                break;
            default:
                throw new FatturaElettronicaException("Invalid 'FormatoTrasmissione', you provide '" . $FormatoTrasmissione . "', value can be FPA12 or FPR12");
                break;

        }
        return $this;
    }

    /**
     * @return string
     */
    public function getCodiceDestinatario(): string
    {
        return $this->CodiceDestinatario;
    }

    /**
     * @param string $CodiceDestinatario
     * @return DatiTrasmissione
     */
    public function setCodiceDestinatario(string $CodiceDestinatario): DatiTrasmissione
    {
        $this->CodiceDestinatario = $CodiceDestinatario;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefono(): string
    {
        return $this->Telefono;
    }

    /**
     * @param string $Telefono
     * @return DatiTrasmissione
     */
    public function setTelefono(string $Telefono): DatiTrasmissione
    {
        $this->Telefono = $Telefono;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return DatiTrasmissione
     */
    public function setEmail(string $Email): DatiTrasmissione
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPECDestinatario(): string
    {
        return $this->PECDestinatario;
    }

    /**
     * @param string $PECDestinatario
     * @return DatiTrasmissione
     */
    public function setPECDestinatario(string $PECDestinatario): DatiTrasmissione
    {
        $this->PECDestinatario = $PECDestinatario;
        return $this;
    }

    public function toArray(){
        $array = [
            'IdTrasmittente' => [
                'IdPaese' => $this->getIdTrasmittente()->getIdPaese(),
                'IdCodice' => $this->getIdTrasmittente()->getIdCodice(),
            ],
            'ProgressivoInvio' => $this->getProgressivoInvio(),
            'FormatoTrasmissione' => $this->getFormatoTrasmissione(),
            'CodiceDestinatario' => $this->getCodiceDestinatario(),
            'ContattiTrasmittente' => [
                'Telefono'=>$this->getTelefono(),
                'Email'=>$this->getEmail(),
            ],
            'PECDestinatario'=>$this->getPECDestinatario(),
        ];

        return array_filter($array);
    }


}