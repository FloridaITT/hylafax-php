<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 00:44
 */

namespace FaxItApp;

use FaxItApp\Exception\HylafaxException;
use FaxItApp\V1\Response\CountryCollection;
use FaxItApp\V1\Response\Fax;
use FaxItApp\V1\Response\FaxCollection;
use FaxItApp\V1\SendFaxRequest;

interface HylafaxApiClient
{
    /**
     * @return CountryCollection
     * @throws HylafaxException
     */
    public function getCountries(): CountryCollection;

    public function getAreaCodes();

    /**
     * @param SendFaxRequest $request
     * @return Fax
     * @throws HylafaxException
     */
    public function sendFax(SendFaxRequest $request): Fax;

    /**
     * @param string $id
     * @return Fax
     * @throws HylafaxException
     */
    public function getFax(string $id): Fax;

    /**
     * @return FaxCollection
     * @throws HylafaxException
     */
    public function getFaxes(): FaxCollection;

    /**
     * @param string $id
     * @return Fax
     * @throws HylafaxException
     */
    public function cancelFax(string $id): Fax;

    /**
     * @param string $id
     * @return void
     * @throws HylafaxException
     */
    public function deleteFax(string $id): void;

}