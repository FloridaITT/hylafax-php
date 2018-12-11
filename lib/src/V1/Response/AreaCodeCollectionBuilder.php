<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 12:08
 */

namespace FaxItApp\V1\Response;


class AreaCodeCollectionBuilder extends CollectionBuilder
{
    /**
     * @var AreaCode[]
     */
    private $content;

    public function build(): AreaCodeCollection
    {
        return new AreaCodeCollection(
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

    public function fillFromArray(array $json): AreaCodeCollectionBuilder
    {
        return $this
            ->setContent(
                $json['content'] && \is_array($json['content'])
                    ? array_map(function ($areaCode) {
                    return AreaCode::builder()
                        ->fillFromArray($areaCode)
                        ->build();
                }, $json['content'])
                    : []
            )
            ->fill($json);
    }

    /**
     * @param AreaCode[] $content
     * @return AreaCodeCollectionBuilder
     */
    public function setContent(array $content): AreaCodeCollectionBuilder
    {
        $this->content = $content;
        return $this;
    }
}