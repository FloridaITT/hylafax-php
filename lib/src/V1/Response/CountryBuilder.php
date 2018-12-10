<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:49
 */

namespace FaxItApp\V1\Response;


class CountryBuilder
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

    public function build(): Country
    {
        return new Country(
            $this->id,
            $this->name,
            $this->alpha2,
            $this->code,
            $this->supportSend,
            $this->supportReceive
        );
    }

    public function fillFromArray(array $json): CountryBuilder
    {
        return $this
            ->setId($json['id'])
            ->setCode($json['code'])
            ->setName($json['name'])
            ->setAlpha2($json['alpha2'])
            ->setSupportSend((bool) $json['supportSend'])
            ->setSupportReceive((bool) $json['supportReceive']);
    }

    /**
     * @param string $id
     * @return CountryBuilder
     */
    public function setId(string $id): CountryBuilder
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     * @return CountryBuilder
     */
    public function setName(string $name): CountryBuilder
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $alpha2
     * @return CountryBuilder
     */
    public function setAlpha2(string $alpha2): CountryBuilder
    {
        $this->alpha2 = $alpha2;
        return $this;
    }

    /**
     * @param int $code
     * @return CountryBuilder
     */
    public function setCode(int $code): CountryBuilder
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param bool $supportSend
     * @return CountryBuilder
     */
    public function setSupportSend(bool $supportSend): CountryBuilder
    {
        $this->supportSend = $supportSend;
        return $this;
    }

    /**
     * @param bool $supportReceive
     * @return CountryBuilder
     */
    public function setSupportReceive(bool $supportReceive): CountryBuilder
    {
        $this->supportReceive = $supportReceive;
        return $this;
    }


}