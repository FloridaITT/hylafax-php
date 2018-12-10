<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:37
 */

namespace FaxItApp\V1\Response;


class Country
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $alpha2;

    /**
     * @var integer
     */
    private $code;

    /**
     * @var bool
     */
    private $supportSend;

    /**
     * @var bool
     */
    private $supportReceive;

    public static function builder(): CountryBuilder
    {
        return new CountryBuilder();
    }

    /**
     * Country constructor.
     * @param string $id
     * @param string $name
     * @param string $alpha2
     * @param int $code
     * @param bool|null $supportSend
     * @param bool|null $supportReceive
     */
    public function __construct(string $id, string $name, string $alpha2, int $code, bool $supportSend, bool $supportReceive)
    {
        $this->id = $id;
        $this->name = $name;
        $this->alpha2 = $alpha2;
        $this->code = $code;
        $this->supportSend = $supportSend;
        $this->supportReceive = $supportReceive;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAlpha2(): string
    {
        return $this->alpha2;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return bool
     */
    public function getSupportSend(): bool
    {
        return (bool)$this->supportSend;
    }

    /**
     * @return bool
     */
    public function getSupportReceive(): bool
    {
        return (bool)$this->supportReceive;
    }
}