<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 11:11
 */

namespace FaxItApp\V1\Request;


class CollectionRequestBuilder
{
    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $size;

    /**
     * @var Sort[]
     */
    private $sorts = [];

    public function build(): CollectionRequest
    {
        return new CollectionRequest(
            $this->page,
            $this->size,
            $this->sorts
        );
    }

    /**
     * @param int $page
     * @return CollectionRequestBuilder
     */
    public function setPage(int $page): CollectionRequestBuilder
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param int $size
     * @return CollectionRequestBuilder
     */
    public function setSize(int $size): CollectionRequestBuilder
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param Sort[] $sorts
     * @return CollectionRequestBuilder
     */
    public function setSorts(array $sorts): CollectionRequestBuilder
    {
        $this->sorts = $sorts;
        return $this;
    }

    /**
     * @param Sort $sort
     * @return CollectionRequestBuilder
     */
    public function addSort(Sort $sort): CollectionRequestBuilder
    {
        $this->sorts[] = $sort;
        return $this;
    }
}