<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 16:56
 */

namespace FaxItApp\V1\Response;


class Pageable
{
    /**
     * @var Sort
     */
    private $sort;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $pageSize;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var bool
     */
    private $unpaged;

    /**
     * @var bool
     */
    private $paged;

    public static function builder(): PageableBuilder
    {
        return new PageableBuilder();
    }

    /**
     * Pageable constructor.
     * @param Sort $sort
     * @param int $offset
     * @param int $pageSize
     * @param int $pageNumber
     * @param bool $unpaged
     * @param bool $paged
     */
    public function __construct(Sort $sort, int $offset, int $pageSize, int $pageNumber, bool $unpaged, bool $paged)
    {
        $this->sort = $sort;
        $this->offset = $offset;
        $this->pageSize = $pageSize;
        $this->pageNumber = $pageNumber;
        $this->unpaged = $unpaged;
        $this->paged = $paged;
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
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @return int
     */
    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    /**
     * @return bool
     */
    public function isUnpaged(): bool
    {
        return $this->unpaged;
    }

    /**
     * @return bool
     */
    public function isPaged(): bool
    {
        return $this->paged;
    }


}