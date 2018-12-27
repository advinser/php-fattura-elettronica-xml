<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:56
 */

namespace Advinser\FatturaElettronicaXml;

use Advinser\FatturaElettronicaXml\Body\Allegati;
use Advinser\FatturaElettronicaXml\Body\DatiBeniServizi;
use Advinser\FatturaElettronicaXml\Body\DatiGenerali;
use Advinser\FatturaElettronicaXml\Body\DatiPagamento;
use Advinser\FatturaElettronicaXml\Body\DatiVeicoli;
use Advinser\FatturaElettronicaXml\Body\FatturaElettronicaBody;
use Advinser\FatturaElettronicaXml\Header\CedentePrestatore;
use Advinser\FatturaElettronicaXml\Header\CessionarioCommittente;
use Advinser\FatturaElettronicaXml\Header\DatiTrasmissione;
use Advinser\FatturaElettronicaXml\Header\FatturaElettronicaHeader;
use Advinser\FatturaElettronicaXml\Header\RappresentanteFiscale;
use Advinser\FatturaElettronicaXml\Header\TerzoIntermediarioOSoggettoEmittente;
use Advinser\FatturaElettronicaXml\Validation\FatturaElettronicaValidateException;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;


class FatturaElettronica
{
    const ERROR_LEVEL_INVALID = 'Invalid';
    const ERROR_LEVEL_REQUIRED = 'Required';
    /**
     * @var FatturaElettronicaHeader
     */
    private $header;
    /**
     * @var FatturaElettronicaBody[]
     */
    private $bodys;

    /**
     * @var string
     */
    private $versione;

    /**
     * @var bool
     */
    private $lotto = false;

    /**
     * @var ValidateErrorContainer
     */
    private $errorContainer;

    /**
     * @var bool
     */
    private $throwValidateException = true;

    /**
     * @var bool
     */
    private $autoValidate = true;

    /**
     * FatturaElettronica constructor.
     * @param FatturaElettronicaHeader $header
     * @param FatturaElettronicaBody $body
     */
    public function __construct(FatturaElettronicaHeader $header = null, FatturaElettronicaBody $body = null, $autoValidate = false, $throwValidateException = true)
    {
        $this->throwValidateException = $throwValidateException;
        $this->autoValidate = $autoValidate;

        $this->header = $header;
        $this->bodys = $body;

        if ($header instanceof FatturaElettronicaHeader) {
            $this->versione = $header->getDatiTrasmissione()->getFormatoTrasmissione();
        }

        $this->errorContainer = new ValidateErrorContainer($this->throwValidateException);
    }

    /**
     * @return Structures\Fiscale|null
     */
    public function getPivaCedente()
    {
        if ($this->getHeader() instanceof FatturaElettronicaHeader) {
            if ($this->getHeader()->getCedentePrestatore() instanceof CedentePrestatore) {
                return $this->getHeader()->getCedentePrestatore()->getIdFiscaleIVA();
            }
        }
        return null;
    }

    /**
     * @return Structures\Fiscale|null
     */
    public function getPivaCommittente()
    {
        if ($this->getHeader() instanceof FatturaElettronicaHeader) {
            if ($this->getHeader()->getCessionarioCommittente() instanceof CessionarioCommittente) {
                return $this->getHeader()->getCessionarioCommittente()->getIdFiscaleIVA();
            }
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCodiceDestinatario()
    {
        if ($this->getHeader() instanceof FatturaElettronicaHeader) {
            if ($this->getHeader()->getCessionarioCommittente() instanceof CessionarioCommittente) {
                return $this->getHeader()->getDatiTrasmissione()->getCodiceDestinatario();
            }
        }
        return null;
    }

    /**
     * @return null|string
     * @throws FatturaElettronicaException
     */
    public function getNumeroFattura()
    {
        if ($this->isLotto()) {
            throw new FatturaElettronicaException("There are multiple body, that means that is non a single 'FatturaElettronica', but a 'Lotto di fatture'. 'Numero fattura' can't be returned safely");
        }
        return $this->getBodys()[0]->getDatiGenerali()->getDatiGeneraliDocumento()->getNumero();
    }

    /**
     * @return null|string
     * @throws FatturaElettronicaException
     */
    public function getDataFattura()
    {
        if ($this->isLotto()) {
            throw new FatturaElettronicaException("There are multiple body, that means that is non a single 'FatturaElettronica', but a 'Lotto di fatture'. 'Numero fattura' can't be returned safely");
        }
        return $this->getBodys()[0]->getDatiGenerali()->getDatiGeneraliDocumento()->getData();
    }

    /**
     * @return null|string
     * @throws FatturaElettronicaException
     */
    public function getImportoTotaleDocumento()
    {
        if ($this->isLotto()) {
            throw new FatturaElettronicaException("There are multiple body, that means that is non a single 'FatturaElettronica', but a 'Lotto di fatture'. 'ImportoTotaleDocumento' can't be returned safely");
        }

        return $this->getBodys()[0]->getDatiGenerali()->getDatiGeneraliDocumento()->getImportoTotaleDocumento();

    }

    /**
     * @return null|string
     * @throws FatturaElettronicaException
     */
    public function getImponibileImporto()
    {
        if ($this->isLotto()) {
            throw new FatturaElettronicaException("There are multiple body, that means that is non a single 'FatturaElettronica', but a 'Lotto di fatture'. 'ImponibileImporto' can't be returned safely");
        }
        return $this->getBodys()[0]->getDatiBeniServizi()->getImponibileImporto();
    }

    /**
     * @return null|string
     * @throws FatturaElettronicaException
     */
    public function getImposta()
    {
        if ($this->isLotto()) {
            throw new FatturaElettronicaException("There are multiple body, that means that is non a single 'FatturaElettronica', but a 'Lotto di fatture'. 'Imposta' can't be returned safely");
        }
        return $this->getBodys()[0]->getDatiBeniServizi()->getImposta();
    }

    /**
     * @return null|string
     * @throws FatturaElettronicaException
     */
    public function getAliquotaIVA()
    {
        if ($this->isLotto()) {
            throw new FatturaElettronicaException("There are multiple body, that means that is non a single 'FatturaElettronica', but a 'Lotto di fatture'. 'AliquotaIVA' can't be returned safely");
        }
        return $this->getBodys()[0]->getDatiBeniServizi()->getAliquotaIVA();
    }

    /**
     * @return bool
     */
    public function isLotto(): bool
    {
        if (count($this->getBodys()) > 1) {
            $this->lotto = true;
        }
        return $this->lotto;
    }

    /**
     * @param bool $lotto
     * @return FatturaElettronica
     */
    public function setLotto(bool $lotto): FatturaElettronica
    {
        $this->lotto = $lotto;
        return $this;
    }


    /**
     * @return FatturaElettronicaHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param FatturaElettronicaHeader $header
     * @return FatturaElettronica
     */
    public function setHeader($header)
    {
        $this->header = $header;
        $this->versione = $header->getDatiTrasmissione()->getFormatoTrasmissione();
        return $this;
    }

    /**
     * @return FatturaElettronicaBody[]
     */
    public function getBodys(): array
    {
        return $this->bodys;
    }

    /**
     * @param FatturaElettronicaBody[] $bodys
     * @return FatturaElettronica
     */
    public function setBodys(array $bodys): FatturaElettronica
    {
        $this->bodys = $bodys;
        return $this;
    }


    /**
     * @param FatturaElettronicaBody $body
     * @return FatturaElettronica
     */
    public function addBody(FatturaElettronicaBody $body): FatturaElettronica
    {
        $this->bodys[] = $body;
        if (count($this->bodys) > 1) {
            $this->setLotto(true);
        }
        return $this;
    }


    /**
     * @return array
     * @throws FatturaElettronicaException
     */
    public function toArray()
    {
        if (!$this->header instanceof FatturaElettronicaHeader) {
            throw new FatturaElettronicaException("missed istance of FatturaElettronicaHeader");
        }
        $array = [
            '@versione' => $this->versione,
            '@xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            '@xmlns:p' => 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2',
            '@xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            '@xsi:schemaLocation' => 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd',
            'FatturaElettronicaHeader' => $this->header->toArray(),
            'FatturaElettronicaBody' => null,
        ];

        if (count($this->getBodys()) == 0) {
            throw new FatturaElettronicaException("missed istance of FatturaElettronicaBody");
        } else {
            if ($this->isLotto()) {
                foreach ($this->getBodys() as $body) {
                    $array['FatturaElettronicaBody'][] = $body->toArray();
                }
            } else {
                $array['FatturaElettronicaBody'] = $this->getBodys()[0]->toArray();
            }
        }
        if ($this->autoValidate) {
            $this->executeValidate($array);
        }

        return $array;
    }

    /**
     * @param array $array
     * @return FatturaElettronica
     * @throws FatturaElettronicaException
     */
    public static function fromArray(array $array, $autoValidate = false, $throwValidateException = true)
    {
        $o = new FatturaElettronica(null, null, $autoValidate, $throwValidateException);


        if ($o->isAutoValidate()) {
            $o->executeValidate($array);
        }

        if (!empty($array['FatturaElettronicaHeader'])) {
            $o->setHeader(FatturaElettronicaHeader::fromArray($array['FatturaElettronicaHeader']));
        }
        if (!empty($array['FatturaElettronicaBody'])) {
            if (isset($array['FatturaElettronicaBody'][0])) {
                foreach ($array['FatturaElettronicaBody'] as $item) {
                    $o->addBody(FatturaElettronicaBody::fromArray($item));
                }
            } else {
                $o->addBody(FatturaElettronicaBody::fromArray($array['FatturaElettronicaBody']));
            }
        }

        return $o;
    }

    /**
     * @param string $json
     * @return FatturaElettronica
     * @throws FatturaElettronicaException
     */
    public static function fromJson(string $json, $autoValidate = false, $throwValidateException = true)
    {
        return FatturaElettronica::fromArray(json_decode($json, true), $autoValidate, $throwValidateException);
    }


    /**
     * @return ValidateErrorContainer
     */
    public function getErrorContainer(): ValidateErrorContainer
    {
        return $this->errorContainer;
    }


    /**
     * @param ValidateError $error
     * @return FatturaElettronica
     */
    public function addError(ValidateError $error): FatturaElettronica
    {
        $this->getErrorContainer()->addError($error);
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->getErrorContainer()->isValid();
    }

    /**
     * @return bool
     * @throws FatturaElettronicaValidateException
     */
    public function check()
    {
        return $this->getErrorContainer()->check();
    }

    /**
     * @return string
     */
    public function getVersione(): string
    {
        return $this->versione;
    }

    /**
     * @param string $versione
     * @return FatturaElettronica
     */
    public function setVersione(string $versione): FatturaElettronica
    {
        $this->versione = $versione;
        return $this;
    }

    /**
     * @return bool
     */
    public function isThrowValidateException(): bool
    {
        return $this->throwValidateException;
    }

    /**
     * @param bool $throwValidateException
     * @return FatturaElettronica
     */
    public function setThrowValidateException(bool $throwValidateException): FatturaElettronica
    {
        $this->throwValidateException = $throwValidateException;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoValidate(): bool
    {
        return $this->autoValidate;
    }

    /**
     * @param bool $autoValidate
     * @return FatturaElettronica
     */
    public function setAutoValidate(bool $autoValidate): FatturaElettronica
    {
        $this->autoValidate = $autoValidate;
        return $this;
    }


    /**
     * @param array $array
     */
    private function executeValidate(array $array)
    {
//        print_r($array);
        if (empty($array['FatturaElettronicaHeader'])) {
            $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, "Missing 'FatturaElettronicaHeader'", 'FatturaElettronica::01', __LINE__));
        } else {

            if (empty($array['FatturaElettronicaHeader']['DatiTrasmissione'])) {
                $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, "Missing 'DatiTrasmissione'", 'FatturaElettronica::02', __LINE__));
            } else {
                DatiTrasmissione::validate($array['FatturaElettronicaHeader']['DatiTrasmissione'], $this->errorContainer);
            }

            if (empty($array['FatturaElettronicaHeader']['CedentePrestatore'])) {
                $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, "Missing 'CedentePrestatore'", 'FatturaElettronica::03', __LINE__));
            } else {
                CedentePrestatore::validate($array['FatturaElettronicaHeader']['CedentePrestatore'], $this->errorContainer);
            }

            if (empty($array['FatturaElettronicaHeader']['CessionarioCommittente'])) {
                $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, "Missing 'CessionarioCommittente'", 'FatturaElettronica::04', __LINE__));
            } else {
                CessionarioCommittente::validate($array['FatturaElettronicaHeader']['CessionarioCommittente'], $this->errorContainer);
            }

            if (empty($array['FatturaElettronicaHeader']['TerzoIntermediarioOSoggettoEmittente'])) {
                TerzoIntermediarioOSoggettoEmittente::validate($array['FatturaElettronicaHeader']['TerzoIntermediarioOSoggettoEmittente'], $this->errorContainer);
                if (empty($array['FatturaElettronicaHeader']['SoggettoEmittente'])) {
                    $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, "Missing 'SoggettoEmittente', you must set a valid value", 'FatturaElettronicaHeader::01', __LINE__));
                } else {
                    if ($array['FatturaElettronicaHeader']['SoggettoEmittente'] != 'CC' && $array['FatturaElettronicaHeader']['SoggettoEmittente'] != 'TZ') {
                        $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, "'SoggettoEmittente', must be 'CC' or 'TZ'", 'FatturaElettronicaHeader::02', __LINE__));
                    }
                }
            }

            if (empty($array['FatturaElettronicaHeader']['RappresentanteFiscale'])) {
                RappresentanteFiscale::validate($array['FatturaElettronicaHeader']['RappresentanteFiscale'], $this->errorContainer);
            }

            $bodyCount = 1;
            if (!empty($array['FatturaElettronicaBody'])) {
                if (isset($array['FatturaElettronicaBody'][0])) {
                    foreach ($array['FatturaElettronicaBody'] as $item) {
                        $this->validateBody($item, $bodyCount);
                        $bodyCount++;
                    }
                } else {
                    $this->validateBody($array['FatturaElettronicaBody'], $bodyCount);
                }
            }
        }

    }

    /**
     * @param array $array
     */
    public function validateBody(array $array, $bodyCount)
    {
        $tag = 'FatturaElettronicaBody_' . $bodyCount . '::';

        $arraye = [
            'DatiPagamento' => null,//0.n
            'Allegati' => null, //0.n
        ];

        if (empty($array['DatiGenerali'])) {
            $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'DatiGenerali'", 'FatturaElettronicaBody::01', __LINE__));
        } else {
            DatiGenerali::validate($array['DatiGenerali'], $this->errorContainer, $tag);
        }
        if (empty($array['DatiBeniServizi'])) {
            $this->errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'DatiBeniServizi'", 'FatturaElettronicaBody::02', __LINE__));
        } else {
            DatiBeniServizi::validate($array['DatiBeniServizi'], $this->errorContainer, $tag);
        }

        if (!empty($array['DatiVeicoli'])) {
            DatiVeicoli::validate($array['DatiVeicoli'], $this->errorContainer, $tag);
        }

        if (!empty($array['DatiPagamento'])) {
            if (!empty($array['DatiPagamento'])) {
                if (isset($array['DatiPagamento'][0])) {
                    foreach ($array['DatiPagamento'] as $item) {
                        DatiPagamento::validate($item, $this->errorContainer, $tag);
                    }
                } else {
                    DatiPagamento::validate($array['DatiPagamento'], $this->errorContainer, $tag);
                }
            }
        }

        if (!empty($array['Allegati'])) {
            if (!empty($array['Allegati'])) {
                if (isset($array['Allegati'][0])) {
                    foreach ($array['Allegati'] as $item) {
                        Allegati::validate($item, $this->errorContainer, $tag);
                    }
                } else {
                    Allegati::validate($array['Allegati'], $this->errorContainer, $tag);
                }
            }
        }
    }


}