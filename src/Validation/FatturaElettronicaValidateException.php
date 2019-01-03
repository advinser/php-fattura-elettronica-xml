<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:56
 */
namespace Advinser\FatturaElettronicaXml\Validation;
use Throwable;

class FatturaElettronicaValidateException extends \Exception
{

    /**
     * FatturaElettronicaValidateException constructor.
     * @param ValidateError[] $errorArray
     * @param string $tag
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(ValidateErrorContainer $errorContainer, $tag = "", $code = 0, Throwable $previous = null)
    {
        if(empty($tag)){
            $tag = 'Validate @ FatturaElettronicaXml :: ';
        }else{
            $tag = 'Validate @ FatturaElettronicaXml :: '.$tag.' :: ';
        }
        $message = '';
        $isCLI = ( php_sapi_name() == 'cli' );
        foreach ($errorContainer->getErrors() as $error){
            $message.=$error;
            if($isCLI){
                $message.="\r\n";
            }else{
                $message.="<br/>";
            }
        }
        if($isCLI){
            $message = $tag."\r\n".$message;
        }else{
            $message = $tag."<br/>".$message;

        }

        parent::__construct($message, $code, $previous);
    }

}