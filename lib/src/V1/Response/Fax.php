<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:41
 */

namespace FaxItApp\V1\Response;


class Fax
{

    public const DIRECTION_SENT = 'SENT';
    public const DIRECTION_RECEIVED = 'RECEIVED';

    public const STATUS_WAITING = 'WAITING';
    public const STATUS_SENDING = 'SENDING';
    public const STATUS_SENDING_FAILED = 'SENDING_FAILED';
    public const STATUS_SENT_SUCCESS = 'SENT_SUCCESS';
    public const STATUS_IN_QUEUE = 'IN_QUEUE';
    public const STATUS_SUCCESS = 'SUCCESS';
    public const STATUS_ERROR = 'ERROR';

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $direction;

    /**
     * @var int|null
     */
    private $pageCount;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $toNumber;

    /**
     * @var string|null
     */
    private $fromNumber;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $completedAt;

    /**
     * @var string|null
     */
    private $errorMessage;

    /**
     * @var Error[]
     */
    private $errors;

    /**
     * @var string
     */
    private $callbackUrl;

    /**
     * @var int
     */
    private $cancelTimeout;

    /**
     * @var OutputFax|null
     */
    private $outputFax;

    public static function builder(): FaxBuilder
    {
        return new FaxBuilder();
    }

    /**
     * Fax constructor.
     * @param string $id
     * @param string $direction
     * @param int|null $pageCount
     * @param string $status
     * @param string $toNumber
     * @param null|string $fromNumber
     * @param \DateTime $createdAt
     * @param \DateTime|null $completedAt
     * @param null|string $errorMessage
     * @param Error[] $errors
     * @param string $callbackUrl
     * @param int $cancelTimeout
     * @param OutputFax|null $outputFax
     */
    public function __construct(string $id, string $direction, ?int $pageCount, string $status, string $toNumber, ?string $fromNumber, \DateTime $createdAt, ?\DateTime $completedAt, ?string $errorMessage, array $errors, string $callbackUrl, int $cancelTimeout, ?OutputFax $outputFax)
    {
        $this->id = $id;
        $this->direction = $direction;
        $this->pageCount = $pageCount;
        $this->status = $status;
        $this->toNumber = $toNumber;
        $this->fromNumber = $fromNumber;
        $this->createdAt = $createdAt;
        $this->completedAt = $completedAt;
        $this->errorMessage = $errorMessage;
        $this->errors = $errors;
        $this->callbackUrl = $callbackUrl;
        $this->cancelTimeout = $cancelTimeout;
        $this->outputFax = $outputFax;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @return int|null
     */
    public function getPageCount(): ?int
    {
        return $this->pageCount;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getToNumber(): string
    {
        return $this->toNumber;
    }

    /**
     * @return null|string
     */
    public function getFromNumber(): ?string
    {
        return $this->fromNumber;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->completedAt;
    }

    /**
     * @return null|string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @return Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
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
     * @return OutputFax|null
     */
    public function getOutputFax(): ?OutputFax
    {
        return $this->outputFax;
    }



}