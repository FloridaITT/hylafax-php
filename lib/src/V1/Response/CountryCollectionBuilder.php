<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 17:12
 */

namespace FaxItApp\V1\Response;


class CountryCollectionBuilder extends CollectionBuilder
{
    /**
     * @var Country[]
     */
    private $content;

    public function build(): CountryCollection
    {
        return new CountryCollection(
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
                    ? array_map(function ($country) {
                        return Country::builder()
                            ->fillFromArray($country)
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
     * @param Country[] $content
     * @return CountryCollectionBuilder
     */
    public function setContent(array $content): CountryCollectionBuilder
    {
        $this->content = $content;
        return $this;
    }

}