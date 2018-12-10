<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:19
 */

namespace FaxItApp\V1\Response;


class PageableBuilder
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

    public function build(): Pageable
    {
        return new Pageable(
            $this->sort,
            $this->offset,
            $this->pageSize,
            $this->pageNumber,
            $this->unpaged,
            $this->paged
        );
    }

    /**
     * @param Sort $sort
     * @return PageableBuilder
     */
    public function setSort(Sort $sort): PageableBuilder
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param int $offset
     * @return PageableBuilder
     */
    public function setOffset(int $offset): PageableBuilder
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @param int $pageSize
     * @return PageableBuilder
     */
    public function setPageSize(int $pageSize): PageableBuilder
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @param int $pageNumber
     * @return PageableBuilder
     */
    public function setPageNumber(int $pageNumber): PageableBuilder
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * @param bool $unpaged
     * @return PageableBuilder
     */
    public function setUnpaged(bool $unpaged): PageableBuilder
    {
        $this->unpaged = $unpaged;
        return $this;
    }

    /**
     * @param bool $paged
     * @return PageableBuilder
     */
    public function setPaged(bool $paged): PageableBuilder
    {
        $this->paged = $paged;
        return $this;
    }


}