<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 12/12/2018
 * Time: 10:48
 */

namespace FaxItApp\V1;


use FaxItApp\V1\Response\Fax;
use Symfony\Component\HttpFoundation\Request;

class OnSendFaxHandler
{
    public function handle(Request $request): Fax
    {
        return Fax::builder()
            ->fillFromArray($request->request->all())
            ->build();
    }
}