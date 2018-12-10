<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:02
 */

namespace FaxItApp\V1\Response;


class CollectionBuilder
{
    /**
     * @var Pageable
     */
    protected $pageable;

    /**
     * @var int
     */
    protected $totalElements;

    /**
     * @var bool
     */
    protected $last;

    /**
     * @var int
     */
    protected $totalPages;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var Sort
     */
    protected $sort;

    /**
     * @var int
     */
    protected $numberOfElements;

    /**
     * @var bool
     */
    protected $first;

    /**
     * @var bool
     */
    protected $empty;

    /**
     * @param Pageable $pageable
     * @return $this
     */
    public function setPageable(Pageable $pageable): CollectionBuilder
    {
        $this->pageable = $pageable;
        return $this;
    }

    /**
     * @param int $totalElements
     * @return $this
     */
    public function setTotalElements(int $totalElements): CollectionBuilder
    {
        $this->totalElements = $totalElements;
        return $this;
    }

    /**
     * @param bool $last
     * @return $this
     */
    public function setLast(bool $last): CollectionBuilder
    {
        $this->last = $last;
        return $this;
    }

    /**
     * @param int $totalPages
     * @return $this
     */
    public function setTotalPages(int $totalPages): CollectionBuilder
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * @param int $size
     * @return $this
     */
    public function setSize(int $size): CollectionBuilder
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param int $number
     * @return $this
     */
    public function setNumber(int $number): CollectionBuilder
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @param Sort $sort
     * @return $this
     */
    public function setSort(Sort $sort): CollectionBuilder
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param int $numberOfElements
     * @return $this
     */
    public function setNumberOfElements(int $numberOfElements): CollectionBuilder
    {
        $this->numberOfElements = $numberOfElements;
        return $this;
    }

    /**
     * @param bool $first
     * @return $this
     */
    public function setFirst(bool $first): CollectionBuilder
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @param bool $empty
     * @return $this
     */
    public function setEmpty(bool $empty): CollectionBuilder
    {
        $this->empty = $empty;
        return $this;
    }

}