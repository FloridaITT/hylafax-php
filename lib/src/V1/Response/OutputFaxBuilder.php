<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:53
 */

namespace FaxItApp\V1\Response;


class OutputFaxBuilder
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

    public function build(): OutputFax
    {
        return new OutputFax(
            $this->id,
            $this->choppingThreshold,
            $this->jobType,
            $this->dialsAttempted,
            $this->lastError,
            $this->maxDials,
            $this->maxTries,
            $this->number,
            $this->pageCount,
            $this->pagesTransmitted,
            $this->verticalResolution,
            $this->sendTime,
            $this->state,
            $this->triesAttempted
        );
    }

    /**
     * @param int $id
     * @return OutputFaxBuilder
     */
    public function setId(int $id): OutputFaxBuilder
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $choppingThreshold
     * @return OutputFaxBuilder
     */
    public function setChoppingThreshold(int $choppingThreshold): OutputFaxBuilder
    {
        $this->choppingThreshold = $choppingThreshold;
        return $this;
    }

    /**
     * @param string $jobType
     * @return OutputFaxBuilder
     */
    public function setJobType(?string $jobType): OutputFaxBuilder
    {
        $this->jobType = $jobType;
        return $this;
    }

    /**
     * @param int $dialsAttempted
     * @return OutputFaxBuilder
     */
    public function setDialsAttempted(int $dialsAttempted): OutputFaxBuilder
    {
        $this->dialsAttempted = $dialsAttempted;
        return $this;
    }

    /**
     * @param null|string $lastError
     * @return OutputFaxBuilder
     */
    public function setLastError(?string $lastError): OutputFaxBuilder
    {
        $this->lastError = $lastError;
        return $this;
    }

    /**
     * @param int $maxDials
     * @return OutputFaxBuilder
     */
    public function setMaxDials(int $maxDials): OutputFaxBuilder
    {
        $this->maxDials = $maxDials;
        return $this;
    }

    /**
     * @param int $maxTries
     * @return OutputFaxBuilder
     */
    public function setMaxTries(int $maxTries): OutputFaxBuilder
    {
        $this->maxTries = $maxTries;
        return $this;
    }

    /**
     * @param string $number
     * @return OutputFaxBuilder
     */
    public function setNumber(string $number): OutputFaxBuilder
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @param int $pageCount
     * @return OutputFaxBuilder
     */
    public function setPageCount(int $pageCount): OutputFaxBuilder
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    /**
     * @param int $pagesTransmitted
     * @return OutputFaxBuilder
     */
    public function setPagesTransmitted(int $pagesTransmitted): OutputFaxBuilder
    {
        $this->pagesTransmitted = $pagesTransmitted;
        return $this;
    }

    /**
     * @param int $verticalResolution
     * @return OutputFaxBuilder
     */
    public function setVerticalResolution(int $verticalResolution): OutputFaxBuilder
    {
        $this->verticalResolution = $verticalResolution;
        return $this;
    }

    /**
     * @param \DateTime $sendTime
     * @return OutputFaxBuilder
     */
    public function setSendTime(\DateTime $sendTime): OutputFaxBuilder
    {
        $this->sendTime = $sendTime;
        return $this;
    }

    /**
     * @param string $state
     * @return OutputFaxBuilder
     */
    public function setState(string $state): OutputFaxBuilder
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @param int $triesAttempted
     * @return OutputFaxBuilder
     */
    public function setTriesAttempted(int $triesAttempted): OutputFaxBuilder
    {
        $this->triesAttempted = $triesAttempted;
        return $this;
    }


}