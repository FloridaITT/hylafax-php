<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:46
 */

namespace FaxItApp\V1\Response;


class Error
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var int
     */
    private $code;

    public static function builder(): ErrorBuilder
    {
        return new ErrorBuilder();
    }

    /**
     * Error constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct(string $message, int $code)
    {
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
}