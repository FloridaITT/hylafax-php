<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 10:58
 */

namespace FaxItApp\V1\Request;


class Sort
{

    public const ASC = 'asc';
    public const DESC = 'desc';

    /**
     * @var string
     */
    private $property;

    /**
     * @var string
     */
    private $direction;

    public static function builder(): SortBuilder
    {
        return new SortBuilder();
    }

    /**
     * Sort constructor.
     * @param string $property
     * @param string $direction
     */
    public function __construct(string $property, string $direction)
    {
        $this->property = $property;
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
}