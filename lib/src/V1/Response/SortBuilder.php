<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:18
 */

namespace FaxItApp\V1\Response;


class SortBuilder
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

    public function build(): Sort
    {
        return new Sort(
            $this->sorted,
            $this->unsorted,
            $this->empty
        );
    }

    /**
     * @param bool $sorted
     * @return SortBuilder
     */
    public function setSorted(bool $sorted): SortBuilder
    {
        $this->sorted = $sorted;
        return $this;
    }

    /**
     * @param bool $unsorted
     * @return SortBuilder
     */
    public function setUnsorted(bool $unsorted): SortBuilder
    {
        $this->unsorted = $unsorted;
        return $this;
    }

    /**
     * @param bool $empty
     * @return SortBuilder
     */
    public function setEmpty(bool $empty): SortBuilder
    {
        $this->empty = $empty;
        return $this;
    }


}