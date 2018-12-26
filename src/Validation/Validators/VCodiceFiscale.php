<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-24
 * Time:         18:34
 */

namespace Advinser\FatturaElettronicaXml\Validation\Validators;


use Advinser\FatturaElettronicaXml\FatturaElettronica;
use Advinser\FatturaElettronicaXml\Validation\ValidateError;
use Advinser\FatturaElettronicaXml\Validation\ValidateErrorContainer;

class VCodiceFiscale
{

    public static function validate($cf,ValidateErrorContainer $errorContainer,$tag){
//        $errorContainer->addError(new ValidateError('', FatturaElettronica::ERROR_LEVEL_INVALID, $tag . "'IdPaese' must be compliant with ISO 3166-1 alpha-2 code standard ", $tag . 'Fiscale::04', __LINE__));
    }

}