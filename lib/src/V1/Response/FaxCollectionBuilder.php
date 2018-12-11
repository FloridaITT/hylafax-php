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

    public function fillFromArray(array $json): FaxCollectionBuilder
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
            ->fill($json);
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