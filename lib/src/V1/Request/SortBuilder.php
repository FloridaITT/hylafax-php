<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 11:09
 */

namespace FaxItApp\V1\Request;


class SortBuilder
{
    /**
     * @var string
     */
    private $property;

    /**
     * @var string
     */
    private $direction;

    public function build(): Sort
    {
        return new Sort(
            $this->property,
            $this->direction
        );
    }

    /**
     * @param string $property
     * @return SortBuilder
     */
    public function setProperty(string $property): SortBuilder
    {
        $this->property = $property;
        return $this;
    }

    /**
     * @param string $direction
     * @return SortBuilder
     */
    public function setDirection(string $direction): SortBuilder
    {
        $this->direction = $direction;
        return $this;
    }
}