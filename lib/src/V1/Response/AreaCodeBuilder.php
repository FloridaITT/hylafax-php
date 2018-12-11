<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 12:06
 */

namespace FaxItApp\V1\Response;


class AreaCodeBuilder
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

    public function build(): AreaCode
    {
        return new AreaCode(
            $this->id,
            $this->state,
            $this->city,
            $this->code,
            $this->country
        );
    }

    /**
     * @param string $id
     * @return AreaCodeBuilder
     */
    public function setId(string $id): AreaCodeBuilder
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $state
     * @return AreaCodeBuilder
     */
    public function setState(string $state): AreaCodeBuilder
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @param string $city
     * @return AreaCodeBuilder
     */
    public function setCity(string $city): AreaCodeBuilder
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param int $code
     * @return AreaCodeBuilder
     */
    public function setCode(int $code): AreaCodeBuilder
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param Country $country
     * @return AreaCodeBuilder
     */
    public function setCountry(Country $country): AreaCodeBuilder
    {
        $this->country = $country;
        return $this;
    }

    public function fillFromArray(array $areaCode): AreaCodeBuilder
    {
        return $this->setId($areaCode['id'])
            ->setState($areaCode['state'])
            ->setCity($areaCode['city'])
            ->setCode($areaCode['code'])
            ->setCountry(
                Country::builder()
                    ->fillFromArray($areaCode['country'])
                    ->build()
            );
    }
}