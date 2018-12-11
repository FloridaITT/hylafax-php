<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 12:07
 */

namespace FaxItApp\V1\Response;


class AreaCodeCollection
{
    /**
     * @var AreaCode[]
     */
    private $content;

    public static function builder(): AreaCodeCollectionBuilder
    {
        return new AreaCodeCollectionBuilder();
    }

    public function __construct(array $content, Pageable $pageable, int $totalElements, bool $last, int $totalPages, int $size, int $number, Sort $sort, int $numberOfElements, bool $first, bool $empty)
    {
        parent::__construct($pageable, $totalElements, $last, $totalPages, $size, $number, $sort, $numberOfElements, $first, $empty);
        $this->content = $content;
    }

    /**
     * @return Country[]
     */
    public function getContent(): array
    {
        return $this->content;
    }
}