<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 11:58
 */

namespace FaxItApp\V1\Response;


class AreaCode
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $city;

    /**
     * @var int
     */
    private $code;

    /**
     * @var Country
     */
    private $country;

    public static function builder(): AreaCodeBuilder
    {
        return new AreaCodeBuilder();
    }

    /**
     * AreaCode constructor.
     * @param string $id
     * @param string $state
     * @param string $city
     * @param int $code
     * @param Country $country
     */
    public function __construct(string $id, string $state, string $city, int $code, Country $country)
    {
        $this->id = $id;
        $this->state = $state;
        $this->city = $city;
        $this->code = $code;
        $this->country = $country;
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
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }
}