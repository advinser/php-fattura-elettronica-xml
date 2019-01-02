<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         04/11/2018
 * Time:         10:34
 */

namespace Advinser\FatturaElettronicaXml\Structures;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

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


    public static $idPaese = [
        'AD',
        'AE',
        'AF',
        'AG',
        'AI',
        'AL',
        'AM',
        'AO',
        'AQ',
        'AR',
        'AS',
        'AT',
        'AU',
        'AW',
        'AX',
        'AZ',
        'BA',
        'BB',
        'BD',
        'BE',
        'BF',
        'BG',
        'BH',
        'BI',
        'BJ',
        'BL',
        'BM',
        'BN',
        'BO',
        'BQ',
        'BR',
        'BS',
        'BT',
        'BV',
        'BW',
        'BY',
        'BZ',
        'CA',
        'CC',
        'CD',
        'CF',
        'CG',
        'CH',
        'CI',
        'CK',
        'CL',
        'CM',
        'CN',
        'CO',
        'CR',
        'CU',
        'CV',
        'CW',
        'CX',
        'CY',
        'CZ',
        'DE',
        'DJ',
        'DK',
        'DM',
        'DO',
        'DZ',
        'EC',
        'EE',
        'EG',
        'EH',
        'ER',
        'ES',
        'ET',
        'FI',
        'FJ',
        'FK',
        'FM',
        'FO',
        'FR',
        'GA',
        'GB',
        'GD',
        'GE',
        'GF',
        'GG',
        'GH',
        'GI',
        'GL',
        'GM',
        'GN',
        'GP',
        'GQ',
        'GR',
        'GS',
        'GT',
        'GU',
        'GW',
        'GY',
        'HK',
        'HM',
        'HN',
        'HR',
        'HT',
        'HU',
        'ID',
        'IE',
        'IL',
        'IM',
        'IN',
        'IO',
        'IQ',
        'IR',
        'IS',
        'IT',
        'JE',
        'JM',
        'JO',
        'JP',
        'KE',
        'KG',
        'KH',
        'KI',
        'KM',
        'KN',
        'KP',
        'KR',
        'KW',
        'KY',
        'KZ',
        'LA',
        'LB',
        'LC',
        'LI',
        'LK',
        'LR',
        'LS',
        'LT',
        'LU',
        'LV',
        'LY',
        'MA',
        'MC',
        'MD',
        'ME',
        'MF',
        'MG',
        'MH',
        'MK',
        'ML',
        'MM',
        'MN',
        'MO',
        'MP',
        'MQ',
        'MR',
        'MS',
        'MT',
        'MU',
        'MV',
        'MW',
        'MX',
        'MY',
        'MZ',
        'NA',
        'NC',
        'NE',
        'NF',
        'NG',
        'NI',
        'NL',
        'NO',
        'NP',
        'NR',
        'NU',
        'NZ',
        'OM',
        'PA',
        'PE',
        'PF',
        'PG',
        'PH',
        'PK',
        'PL',
        'PM',
        'PN',
        'PR',
        'PS',
        'PT',
        'PW',
        'PY',
        'QA',
        'RE',
        'RO',
        'RS',
        'RU',
        'RW',
        'SA',
        'SB',
        'SC',
        'SD',
        'SE',
        'SG',
        'SH',
        'SI',
        'SJ',
        'SK',
        'SL',
        'SM',
        'SN',
        'SO',
        'SR',
        'SS',
        'ST',
        'SV',
        'SX',
        'SY',
        'SZ',
        'TC',
        'TD',
        'TF',
        'TG',
        'TH',
        'TJ',
        'TK',
        'TL',
        'TM',
        'TN',
        'TO',
        'TR',
        'TT',
        'TV',
        'TW',
        'TZ',
        'UA',
        'UG',
        'UM',
        'US',
        'UY',
        'UZ',
        'VA',
        'VC',
        'VE',
        'VG',
        'VI',
        'VN',
        'VU',
        'WF',
        'WS',
        'YE',
        'YT',
        'ZA',
        'ZM',
        'ZW',
        '00' // used with IdCodice = 99999999999
    ];

    /**
     * @param $array
     * @param ValidateErrorContainer $errorContainer
     * @param string $tag
     */
    public static function validate($array, ValidateErrorContainer $errorContainer, $tag = '')
    {
        if (empty($array['IdPaese'])) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'IdPaese'", $tag . 'Fiscale::01', __LINE__));
        }else{
            if(array_search($array['IdPaese'],self::$idPaese) === false){
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'IdPaese' must be compliant with ISO 3166-1 alpha-2 code standard ", $tag . 'Fiscale::04', __LINE__));
            }
        }
        if (empty($array['IdCodice'])) {
            $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_REQUIRED, $tag . "Missing 'IdCodice'", $tag . 'Fiscale::03', __LINE__));
        } else {
            $l = strlen($array['IdCodice']);
            if ($l<1 || $l > 28) {
                $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'IdCodice' seems invalid length must be between 1 and 28 ", $tag . 'Fiscale::04', __LINE__));
            }
        }
    }
}