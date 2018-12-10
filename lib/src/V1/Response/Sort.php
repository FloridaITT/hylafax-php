<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 16:57
 */

namespace FaxItApp\V1\Response;


class Sort
{
    /**
     * @var bool
     */
    private $sorted;

    /**
     * @var bool
     */
    private $unsorted;

    /**
     * @var bool
     */
    private $empty;

    public static function builder(): SortBuilder
    {
        return new SortBuilder();
    }

    /**
     * Sort constructor.
     * @param bool $sorted
     * @param bool $unsorted
     * @param bool $empty
     */
    public function __construct(bool $sorted, bool $unsorted, bool $empty)
    {
        $this->sorted = $sorted;
        $this->unsorted = $unsorted;
        $this->empty = $empty;
    }

    /**
     * @return bool
     */
    public function isSorted(): bool
    {
        return $this->sorted;
    }

    /**
     * @return bool
     */
    public function isUnsorted(): bool
    {
        return $this->unsorted;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->empty;
    }


}