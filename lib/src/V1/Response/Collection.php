<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 16:53
 */

namespace FaxItApp\V1\Response;


class Collection
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
     * Collection constructor.
     * @param Pageable $pageable
     * @param int $totalElements
     * @param bool $last
     * @param int $totalPages
     * @param int $size
     * @param int $number
     * @param Sort $sort
     * @param int $numberOfElements
     * @param bool $first
     * @param bool $empty
     */
    public function __construct(Pageable $pageable, int $totalElements, bool $last, int $totalPages, int $size, int $number, Sort $sort, int $numberOfElements, bool $first, bool $empty)
    {
        $this->pageable = $pageable;
        $this->totalElements = $totalElements;
        $this->last = $last;
        $this->totalPages = $totalPages;
        $this->size = $size;
        $this->number = $number;
        $this->sort = $sort;
        $this->numberOfElements = $numberOfElements;
        $this->first = $first;
        $this->empty = $empty;
    }


    /**
     * @return Pageable
     */
    public function getPageable(): Pageable
    {
        return $this->pageable;
    }

    /**
     * @return int
     */
    public function getTotalElements(): int
    {
        return $this->totalElements;
    }

    /**
     * @return bool
     */
    public function isLast(): bool
    {
        return $this->last;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return Sort
     */
    public function getSort(): Sort
    {
        return $this->sort;
    }

    /**
     * @return int
     */
    public function getNumberOfElements(): int
    {
        return $this->numberOfElements;
    }

    /**
     * @return bool
     */
    public function isFirst(): bool
    {
        return $this->first;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->empty;
    }


}