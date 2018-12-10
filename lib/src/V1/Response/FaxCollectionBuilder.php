<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:05
 */

namespace FaxItApp\V1\Response;


class FaxCollectionBuilder extends CollectionBuilder
{
    /**
     * @var Fax[]
     */
    private $content = [];

    public function build(): FaxCollection
    {
        return new FaxCollection(
            $this->content,
            $this->pageable,
            $this->totalElements,
            $this->last,
            $this->totalPages,
            $this->size,
            $this->number,
            $this->sort,
            $this->numberOfElements,
            $this->first,
            $this->empty
        );
    }

    public function fillFromArray(array $json)
    {
        return $this
            ->setContent(
            $json['content'] && \is_array($json['content'])
                ? array_map(function ($fax) {
                return Fax::builder()
                    ->fillFromArray($fax)
                    ->build();
            }, $json['content'])
                : []
        )
        ->setNumber($json['number'])
        ->setEmpty($json['empty'])
        ->setFirst($json['first'])
        ->setLast($json['last'])
        ->setNumberOfElements($json['numberOfElements'])
        ->setPageable(
            Pageable::builder()
                ->setOffset($json['pageable']['offset'])
                ->setPaged($json['pageable']['paged'])
                ->setPageNumber($json['pageable']['pageNumber'])
                ->setPageSize($json['pageable']['pageSize'])
                ->setSort(
                    Sort::builder()
                        ->setEmpty($json['pageable']['sort']['empty'])
                        ->setSorted($json['pageable']['sort']['sorted'])
                        ->setUnsorted($json['pageable']['sort']['unsorted'])
                        ->build()
                )
                ->setUnpaged($json['pageable']['unpaged'])
                ->build()
        )
        ->setSize($json['size'])
        ->setTotalElements($json['totalElements'])
        ->setTotalPages($json['totalPages'])
        ->setSort(
            Sort::builder()
                ->setSorted($json['sort']['sorted'])
                ->setUnsorted($json['sort']['unsorted'])
                ->setEmpty($json['sort']['empty'])
                ->build()
        );
    }

    /**
     * @param Fax[] $content
     * @return FaxCollectionBuilder
     */
    public function setContent(array $content): FaxCollectionBuilder
    {
        $this->content = $content;
        return $this;
    }
}