<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:04
 */

namespace FaxItApp\V1\Response;


class FaxCollection extends Collection
{
    /**
     * @var Fax[]
     */
    private $content;

    public static function builder(): FaxCollectionBuilder
    {
        return new FaxCollectionBuilder();
    }

    public function __construct(array $content, Pageable $pageable, int $totalElements, bool $last, int $totalPages, int $size, int $number, Sort $sort, int $numberOfElements, bool $first, bool $empty)
    {
        parent::__construct($pageable, $totalElements, $last, $totalPages, $size, $number, $sort, $numberOfElements, $first, $empty);
        $this->content = $content;
    }


    /**
     * @return Fax[]
     */
    public function getContent(): array
    {
        return $this->content;
    }
}