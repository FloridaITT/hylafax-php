<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:53
 */

namespace FaxItApp\V1\Response;


class ErrorBuilder
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var int
     */
    private $code;

    public function build(): Error
    {
        return new Error(
            $this->message,
            $this->code
        );
    }

    /**
     * @param string $message
     * @return ErrorBuilder
     */
    public function setMessage(string $message): ErrorBuilder
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param int $code
     * @return ErrorBuilder
     */
    public function setCode(int $code): ErrorBuilder
    {
        $this->code = $code;
        return $this;
    }
}