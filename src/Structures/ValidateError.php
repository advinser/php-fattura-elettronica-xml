<?php
/**
 * Created by    Gabriel Andrei gabrielandrei79@gmail.com
 * Date:         2018-12-22
 * Time:         13:58
 */

namespace Advinser\FatturaElettronicaXml\Structures;


class ValidateError
{

    /**
     * @var string
     */
    private $level;
    /**
     * @var string
     */
    private $message;
    /**
     * @var string
     */
    private $code;
    /**
     * @var integer
     */
    private $line;
    /**
     * @var string
     */
    private $messageTemplate = "%s | Code: %s | Line: %d | Message: %s";

    /**
     * ValidateError constructor.
     * @param string $level
     * @param string $message
     * @param string $code
     * @param int $line
     * @param string $template
     */
    public function __construct(string $level, string $message, string $code, int $line, ?string $template = null)
    {
        $this->level = $level;
        $this->message = $message;
        $this->code = $code;
        $this->line = $line;
        if($template !==null){
            $this->messageTemplate = $template;
        }
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param int $line
     */
    public function setLine(int $line): void
    {
        $this->line = $line;
    }

    /**
     * @return string
     */
    public function getMessageTemplate(): string
    {
        return $this->messageTemplate;
    }

    /**
     * @param string $messageTemplate
     */
    public function setMessageTemplate(string $messageTemplate): void
    {
        $this->messageTemplate = $messageTemplate;
    }

    /**
     * @return string
     */
    public function bMessage(){
        return sprintf($this->messageTemplate,$this->level,$this->code,$this->line,$this->message);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->bMessage();
    }

    public function toArray(){
        return [
            'level'=>$this->level,
            'code'=>$this->code,
            'line'=>$this->line,
            'message'=>$this->message
        ];
    }


}