<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 11/12/2018
 * Time: 12:21
 */

namespace FaxItApp\V1;


use FaxItApp\V1\Request\CollectionRequest;

class QueryStringUtils
{
    public static function fromCollectionRequest(CollectionRequest $request): string
    {
        $requestParams = [
            'page' => $request->getPage(),
            'size' => $request->getSize(),
        ];
        $queryString = http_build_query($requestParams);
        foreach ($request->getSorts() as $sort) {
            $queryString .= '&sort=' . $sort->getProperty() . ',' . $sort->getDirection();
        }
        return $queryString;
    }
}