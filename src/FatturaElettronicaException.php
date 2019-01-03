<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         03/11/2018
 * Time:         18:56
 */

namespace Advinser\FatturaElettronicaXml;

use Throwable;

class FatturaElettronicaException extends \Exception
{
    /**
     * FatturaElettronicaException constructor.
     * @param string $message
     * @param string $tag
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $tag = "", $code = 0, Throwable $previous = null)
    {
        if (empty($tag)) {
            $tag = 'FatturaElettronicaXml :: ';
        } else {
            $tag = 'FatturaElettronicaXml :: ' . $tag . ' :: ';
        }
        parent::__construct($tag . $message, $code, $previous);
    }

}