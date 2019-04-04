<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 01:36
 */

namespace FaxItApp\V1\Request;

/**
 * Class SendFaxRequest
 * @package FaxItApp\V1
 */
class SendFaxRequest
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
     * @var FaxPayload
     */
    private $faxPayload;

    /**
     * @var array
     */
    private $files;

    public static function builder(): SendFaxRequestBuilder
    {
        return new SendFaxRequestBuilder();
    }

    /**
     * SendFaxRequest constructor.
     * @param string $to
     * @param string $callbackUrl
     * @param int $cancelTimeout
     * @param array $files
     * @param FaxPayload $faxPayload
     */
    public function __construct(string $to, string $callbackUrl, int $cancelTimeout, array $files, FaxPayload $faxPayload)
    {
        $this->to = $to;
        $this->callbackUrl = $callbackUrl;
        $this->cancelTimeout = $cancelTimeout;
        $this->files = $files;
        $this->faxPayload = $faxPayload;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @return string
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * @return int
     */
    public function getCancelTimeout(): int
    {
        return $this->cancelTimeout;
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @return FaxPayload
     */
    public function getFaxPayload(): FaxPayload
    {
        return $this->faxPayload;
    }


}