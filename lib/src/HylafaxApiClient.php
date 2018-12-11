<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 00:44
 */

namespace FaxItApp;

use FaxItApp\Exception\HylafaxException;
use FaxItApp\V1\Request\CollectionRequest;
use FaxItApp\V1\Response\AreaCodeCollection;
use FaxItApp\V1\Response\CountryCollection;
use FaxItApp\V1\Response\Fax;
use FaxItApp\V1\Response\FaxCollection;
use FaxItApp\V1\Request\SendFaxRequest;

interface HylafaxApiClient
{
    /**
     * @param $request CollectionRequest
     * @return CountryCollection
     * @throws HylafaxException
     */
    public function getCountries(CollectionRequest $request): CountryCollection;

    /**
     * @param string $country
     * @param CollectionRequest $request
     * @return AreaCodeCollection
     * @throws HylafaxException
     */
    public function getAreaCodes(string $country, CollectionRequest $request): AreaCodeCollection;

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
     * @param $request CollectionRequest
     * @return FaxCollection
     * @throws HylafaxException
     */
    public function getFaxes(CollectionRequest $request): FaxCollection;

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