<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:53
 */

namespace FaxItApp\V1\Response;


class FaxBuilder
{
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
    private $errors = [];

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

    public function build(): Fax
    {
        return new Fax(
            $this->id,
            $this->direction,
            $this->pageCount,
            $this->status,
            $this->toNumber,
            $this->fromNumber,
            $this->createdAt,
            $this->completedAt,
            $this->errorMessage,
            $this->errors,
            $this->callbackUrl,
            $this->cancelTimeout,
            $this->outputFax
        );
    }

    public function fillFromArray(array $json): FaxBuilder
    {
        return $this
            ->setId($json['id'])
            ->setDirection($json['direction'])
            ->setPageCount($json['pageCount'])
            ->setStatus($json['status'])
            ->setToNumber($json['toNumber'])
            ->setFromNumber($json['fromNumber'])
            ->setCreatedAt($json['createdAt'] ? \DateTime::createFromFormat('Y-m-d H:i:s', $json['createdAt']): new \DateTime())
            ->setCompletedAt($json['completedAt'] ? \DateTime::createFromFormat('Y-m-d H:i:s', $json['completedAt']) : null)
            ->setErrorMessage($json['errorMessage'] ?? null)
            ->setErrors($json['errors'] && \is_array($json['errors']) ? array_map(function ($error) {
                return Error::builder()
                    ->setMessage($error['message'])
                    ->setCode($error['code'])
                    ->build();
            }, $json['errors']) : [])
            ->setCallbackUrl($json['callbackUrl'])
            ->setCancelTimeout($json['cancelTimeout'])
            ->setOutputFax(
                $json['outputFax']
                    ? OutputFax::builder()
                    ->setId($json['outputFax']['id'])
                    ->setPageCount($json['outputFax']['pageCount'])
                    ->setState($json['outputFax']['state'])
                    ->setLastError($json['outputFax']['lastError'])
                    ->setChoppingThreshold($json['outputFax']['choppingThreshold'])
                    ->setDialsAttempted($json['outputFax']['dialsAttempted'])
                    ->setJobType($json['outputFax']['jobType'])
                    ->setMaxDials($json['outputFax']['maxDials'])
                    ->setMaxTries($json['outputFax']['maxTries'])
                    ->setNumber($json['outputFax']['number'])
                    ->setPagesTransmitted($json['outputFax']['pagesTransmitted'])
                    ->setSendTime($json['outputFax']['sendTime'] ? \DateTime::createFromFormat('Y-m-d H:i:s', $json['outputFax']['sendTime']) : null)
                    ->setTriesAttempted($json['outputFax']['triesAttempted'])
                    ->setVerticalResolution($json['outputFax']['verticalResolution'])
                    ->build()
                    : null
            );
    }

    /**
     * @param string $id
     * @return FaxBuilder
     */
    public function setId(string $id): FaxBuilder
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $direction
     * @return FaxBuilder
     */
    public function setDirection(string $direction): FaxBuilder
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @param int|null $pageCount
     * @return FaxBuilder
     */
    public function setPageCount(?int $pageCount): FaxBuilder
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    /**
     * @param string $status
     * @return FaxBuilder
     */
    public function setStatus(string $status): FaxBuilder
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $toNumber
     * @return FaxBuilder
     */
    public function setToNumber(string $toNumber): FaxBuilder
    {
        $this->toNumber = $toNumber;
        return $this;
    }

    /**
     * @param null|string $fromNumber
     * @return FaxBuilder
     */
    public function setFromNumber(?string $fromNumber): FaxBuilder
    {
        $this->fromNumber = $fromNumber;
        return $this;
    }

    /**
     * @param \DateTime $createdAt
     * @return FaxBuilder
     */
    public function setCreatedAt(\DateTime $createdAt): FaxBuilder
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param \DateTime|null $completedAt
     * @return FaxBuilder
     */
    public function setCompletedAt(?\DateTime $completedAt): FaxBuilder
    {
        $this->completedAt = $completedAt;
        return $this;
    }

    /**
     * @param null|string $errorMessage
     * @return FaxBuilder
     */
    public function setErrorMessage(?string $errorMessage): FaxBuilder
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @param Error[] $errors
     * @return FaxBuilder
     */
    public function setErrors(array $errors): FaxBuilder
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @param string $callbackUrl
     * @return FaxBuilder
     */
    public function setCallbackUrl(string $callbackUrl): FaxBuilder
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * @param int $cancelTimeout
     * @return FaxBuilder
     */
    public function setCancelTimeout(int $cancelTimeout): FaxBuilder
    {
        $this->cancelTimeout = $cancelTimeout;
        return $this;
    }

    /**
     * @param OutputFax|null $outputFax
     * @return FaxBuilder
     */
    public function setOutputFax(?OutputFax $outputFax): FaxBuilder
    {
        $this->outputFax = $outputFax;
        return $this;
    }
}