<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-23
 * Time:         09:56
 */

namespace Advinser\FatturaElettronicaXml\Validation;


class ValidateErrorContainer
{
    /**
     * @var ValidateError[]
     */
    private $errors = [];

    /**
     * @var bool
     */
    private $throwValidateException= true;

    /**
     * ValidateErrorContainer constructor.
     */
    public function __construct($throwValidateException = true)
    {
        $this->errors = [];
        $this->throwValidateException = $throwValidateException;
    }


    /**
     * @return ValidateError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param ValidateError[] $errors
     * @return ValidateErrorContainer
     */
    public function setErrors(array $errors): ValidateErrorContainer
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @param ValidateError $error
     * @return ValidateErrorContainer
     */
    public function addError(ValidateError $error): ValidateErrorContainer
    {
        $this->errors[] = $error;
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
     * @return ValidateErrorContainer
     */
    public function setThrowValidateException(bool $throwValidateException): ValidateErrorContainer
    {
        $this->throwValidateException = $throwValidateException;
        return $this;
    }

    /**
     * @param bool $throwException
     * @return bool
     * @throws FatturaElettronicaValidateException
     */
    public function check(){
        if(!$this->isValid()){
            if($this->throwValidateException){
                throw new FatturaElettronicaValidateException($this);
            }
        }

        return $this->isValid();
    }

    /**
     * @return bool
     */
    public function isValid(){
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function getArrayErrors(){
        $a = [];

        foreach ($this->errors as $e){
            $a[] = $e->toArray();
        }

        return $a;
    }

    /**
     * @return false|string
     */
    public function getJsonErrors(){
        return json_encode($this->getArrayErrors());
    }

}