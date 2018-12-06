<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 00:44
 */

namespace FaxItApp;

use FaxItApp\V1\Request;
use FaxItApp\V1\SendFaxRequest;

interface HylafaxApiClient
{
    public function getCountries();
    public function getAreaCodes();
    public function sendFax(SendFaxRequest $request);
    public function getFax(string $id);
    public function getFaxes();
    public function cancelFax(string $id);
    public function deleteFax(string $id);

}