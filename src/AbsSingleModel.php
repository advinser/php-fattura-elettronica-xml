<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-24
 * Time:         15:57
 */

namespace Advinser\FatturaElettronicaXml\Validation;

abstract class AbsSingleModel
{
    /**
     * @var ValidateError[]
     */
    private $errors = [];

    /**
     * @return ValidateError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param ValidateError[] $errors
     * @return AbsSingleModel
     */
    public function setErrors(array $errors): AbsSingleModel
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @param ValidateError $error
     * @return AbsSingleModel
     */
    public function addError(ValidateError $error): AbsSingleModel
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * @param ValidateErrorContainer $errorContainer
     * @return AbsSingleModel
     */
    public function addErrorsToContainer(ValidateErrorContainer $errorContainer): AbsSingleModel
    {
        foreach ($this->errors as $error) {
            $errorContainer->addError($error);
        }
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid(){
        return empty($this->errors);
    }


}