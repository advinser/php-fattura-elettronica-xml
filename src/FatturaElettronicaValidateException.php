<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:56
 */
namespace Advinser\FatturaElettronicaXml;
use Throwable;

class FatturaElettronicaValidateException extends \Exception
{
    /**
     * FatturaElettronicaValidateException constructor.
     * @param array $messageArray
     * @param string $tag
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(array $messageArray = [], $tag = "", $code = 0, Throwable $previous = null)
    {
        if(empty($tag)){
            $tag = 'Validate @ FatturaElettronicaXml :: ';
        }else{
            $tag = 'Validate @ FatturaElettronicaXml :: '.$tag.' :: ';
        }
        $message = implode("\r\n",$messageArray);


        parent::__construct($tag."\r\n".$message, $code, $previous);
    }

}