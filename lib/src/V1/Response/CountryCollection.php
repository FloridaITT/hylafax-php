<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:10
 */

namespace FaxItApp\V1\Response;


class CountryCollection extends Collection
{
    /**
     * @var Country[]
     */
    private $content;

    public static function builder(): CountryCollectionBuilder
    {
        return new CountryCollectionBuilder();
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