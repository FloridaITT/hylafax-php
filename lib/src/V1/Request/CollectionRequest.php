<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 10:58
 */

namespace FaxItApp\V1\Request;


class CollectionRequest
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
    private $sorts;

    /**
     * CollectionRequest constructor.
     * @param int $page
     * @param int $size
     * @param Sort[] $sorts
     */
    public function __construct(int $page, int $size, array $sorts)
    {
        $this->page = $page;
        $this->size = $size;
        $this->sorts = $sorts;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return Sort[]
     */
    public function getSorts(): array
    {
        return $this->sorts;
    }

}