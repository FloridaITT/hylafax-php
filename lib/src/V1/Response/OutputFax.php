<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:43
 */

namespace FaxItApp\V1\Response;


class OutputFax
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $choppingThreshold;

    /**
     * @var string|null
     */
    private $jobType;

    /**
     * @var int
     */
    private $dialsAttempted;

    /**
     * @var string|null
     */
    private $lastError;

    /**
     * @var int
     */
    private $maxDials;

    /**
     * @var int
     */
    private $maxTries;

    /**
     * @var string
     */
    private $number;

    /**
     * @var int
     */
    private $pageCount;

    /**
     * @var int
     */
    private $pagesTransmitted;

    /**
     * @var int
     */
    private $verticalResolution;

    /**
     * @var \DateTime
     */
    private $sendTime;

    /**
     * @var string
     */
    private $state;

    /**
     * @var int
     */
    private $triesAttempted;

    public static function builder(): OutputFaxBuilder
    {
        return new OutputFaxBuilder();
    }

    /**
     * OutputFax constructor.
     * @param int $id
     * @param int $choppingThreshold
     * @param string $jobType
     * @param int $dialsAttempted
     * @param null|string $lastError
     * @param int $maxDials
     * @param int $maxTries
     * @param string $number
     * @param int $pageCount
     * @param int $pagesTransmitted
     * @param int $verticalResolution
     * @param \DateTime $sendTime
     * @param string $state
     * @param int $triesAttempted
     */
    public function __construct(int $id, int $choppingThreshold, ?string $jobType, int $dialsAttempted, ?string $lastError, int $maxDials, int $maxTries, string $number, int $pageCount, int $pagesTransmitted, int $verticalResolution, \DateTime $sendTime, string $state, int $triesAttempted)
    {
        $this->id = $id;
        $this->choppingThreshold = $choppingThreshold;
        $this->jobType = $jobType;
        $this->dialsAttempted = $dialsAttempted;
        $this->lastError = $lastError;
        $this->maxDials = $maxDials;
        $this->maxTries = $maxTries;
        $this->number = $number;
        $this->pageCount = $pageCount;
        $this->pagesTransmitted = $pagesTransmitted;
        $this->verticalResolution = $verticalResolution;
        $this->sendTime = $sendTime;
        $this->state = $state;
        $this->triesAttempted = $triesAttempted;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getChoppingThreshold(): int
    {
        return $this->choppingThreshold;
    }

    /**
     * @return string|null
     */
    public function getJobType(): ?string
    {
        return $this->jobType;
    }

    /**
     * @return int
     */
    public function getDialsAttempted(): int
    {
        return $this->dialsAttempted;
    }

    /**
     * @return null|string
     */
    public function getLastError(): ?string
    {
        return $this->lastError;
    }

    /**
     * @return int
     */
    public function getMaxDials(): int
    {
        return $this->maxDials;
    }

    /**
     * @return int
     */
    public function getMaxTries(): int
    {
        return $this->maxTries;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    /**
     * @return int
     */
    public function getPagesTransmitted(): int
    {
        return $this->pagesTransmitted;
    }

    /**
     * @return int
     */
    public function getVerticalResolution(): int
    {
        return $this->verticalResolution;
    }

    /**
     * @return \DateTime
     */
    public function getSendTime(): \DateTime
    {
        return $this->sendTime;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getTriesAttempted(): int
    {
        return $this->triesAttempted;
    }

}