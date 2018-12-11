<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 01:39
 */

namespace FaxItApp\V1\Request;

/**
 * Class SendFaxRequestBuilder
 * @package FaxItApp\V1
 */
class SendFaxRequestBuilder
{
    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $callbackUrl;

    /**
     * @var integer
     */
    private $cancelTimeout;

    /**
     * @var array
     */
    private $files = [];

    public function create(): SendFaxRequest
    {
        return new SendFaxRequest(
            $this->to,
            $this->callbackUrl,
            $this->cancelTimeout,
            $this->files
        );
    }

    /**
     * @param string $to
     * @return SendFaxRequestBuilder
     */
    public function setTo(string $to): SendFaxRequestBuilder
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @param string $callbackUrl
     * @return SendFaxRequestBuilder
     */
    public function setCallbackUrl(string $callbackUrl): SendFaxRequestBuilder
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * @param int $cancelTimeout
     * @return SendFaxRequestBuilder
     */
    public function setCancelTimeout(int $cancelTimeout): SendFaxRequestBuilder
    {
        $this->cancelTimeout = $cancelTimeout;
        return $this;
    }

    /**
     * @param string $filePath
     * @return SendFaxRequestBuilder
     */
    public function addFile(string $filePath): SendFaxRequestBuilder
    {
        $this->files[] = $filePath;
        return $this;
    }

}