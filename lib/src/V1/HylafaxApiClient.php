<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 00:55
 */

namespace FaxItApp\V1;

use FaxItApp\Exception\HylafaxException;
use FaxItApp\V1\Request\CollectionRequest;
use FaxItApp\V1\Request\SendFaxRequest;
use FaxItApp\V1\Response\AreaCodeCollection;
use FaxItApp\V1\Response\CountryCollection;
use FaxItApp\V1\Response\Fax;
use FaxItApp\V1\Response\FaxCollection;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class HylafaxApiClient implements \FaxItApp\HylafaxApiClient
{
    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var HylafaxClientConfig
     */
    private $config;

    public function __construct(HylafaxClientConfig $config)
    {
        $this->config = $config;

        $this->httpClient = new Client([
            'base_uri' => $this->config->getEndpoint(),
        ]);
    }

    public function getCountries(CollectionRequest $request): CountryCollection
    {
        try {

            $response = $this->httpClient->get(sprintf('countries?%s', QueryStringUtils::fromCollectionRequest($request)), [
                RequestOptions::AUTH => $this->getAuth()
            ]);

            $json = json_decode($response->getBody()->getContents(), true);

            return CountryCollection::builder()
                ->fillFromArray($json)
                ->build();

        } catch (\Throwable $error) {
            throw HylafaxException::failedToGetCountryCollection($error);
        }
    }

    /**
     * @param string $country
     * @param CollectionRequest $request
     * @return AreaCodeCollection
     * @throws HylafaxException
     */
    public function getAreaCodes(string $country, CollectionRequest $request): AreaCodeCollection
    {
        try {

            $response = $this->httpClient->get(sprintf('area-codes?country=%s&%s', $country, QueryStringUtils::fromCollectionRequest($request)), [
                RequestOptions::AUTH => $this->getAuth()
            ]);

            $json = json_decode($response->getBody()->getContents(), true);

            return AreaCodeCollection::builder()
                ->fillFromArray($json)
                ->build();

        } catch (\Throwable $error) {
            throw HylafaxException::failedToGetAreaCodeCollection($error);
        }
    }

    /**
     * @param SendFaxRequest $request
     * @return Fax
     * @throws HylafaxException
     */
    public function sendFax(SendFaxRequest $request): Fax
    {

        try {
            $multiPart = [
                [
                    'name' => 'to',
                    'contents' => $request->getTo()
                ],
                [
                    'name' => 'callback_url',
                    'contents' => $request->getCallbackUrl()
                ],
                [
                    'name' => 'cancel_timeout',
                    'contents' => $request->getCancelTimeout()
                ],
            ];
            foreach ($request->getFiles() as $file) {
                $multiPart[] = [
                    'name' => 'files',
                    'contents' => fopen($file, 'r')
                ];
            }
            $response = $this->httpClient->post('faxes', [
                // http://docs.guzzlephp.org/en/stable/quickstart.html#sending-form-files
                RequestOptions::MULTIPART => $multiPart,
                RequestOptions::AUTH => $this->getAuth()
            ]);

            $json = json_decode($response->getBody()->getContents(), true);

            return Fax::builder()
                ->fillFromArray($json)
                ->build();

        } catch (\Throwable $e) {
            throw HylafaxException::failedToSendFax($e);
        }

    }

    /**
     * @param string $id
     * @return Fax
     * @throws HylafaxException
     */
    public function getFax(string $id): Fax
    {
        try {
            $response = $this->httpClient->get(sprintf('faxes/%s', $id), [
                RequestOptions::AUTH => $this->getAuth()
            ]);

            $json = json_decode($response->getBody()->getContents(), true);

            return Fax::builder()
                ->fillFromArray($json)
                ->build();

        } catch (\Throwable $error) {
            throw HylafaxException::failedToGetFax($id, $error);
        }
    }

    public function getFaxes(CollectionRequest $request): FaxCollection
    {
        try {
            $response = $this->httpClient->get(sprintf('faxes'), [
                RequestOptions::AUTH => $this->getAuth()
            ]);

            $json = json_decode($response->getBody()->getContents(), true);

            return FaxCollection::builder()
                ->fillFromArray($json)
                ->build();

        } catch (\Throwable $error) {
            throw HylafaxException::failedToGetFaxCollection($error);
        }
    }

    /**
     * @param string $id
     * @return Fax
     * @throws HylafaxException
     */
    public function cancelFax(string $id): Fax
    {
        try {
            $response = $this->httpClient->post(sprintf('faxes/%s/cancel', $id), [
                RequestOptions::AUTH => $this->getAuth()
            ]);

            $json = json_decode($response->getBody()->getContents(), true);

            return Fax::builder()
                ->fillFromArray($json)
                ->build();
        } catch (\Throwable $error) {
            throw HylafaxException::failedToCancelFax($id, $error);
        }
    }

    /**
     * @param string $id
     * @throws HylafaxException
     */
    public function deleteFax(string $id): void
    {
        try {
            $this->httpClient->delete(sprintf('faxes/%s', $id), [
                RequestOptions::AUTH => $this->getAuth()
            ]);
        } catch (\Throwable $error) {
            throw HylafaxException::failedToDeleteFax($id, $error);
        }
    }

    private function getAuth(): array
    {
        return [$this->config->getUsername(), $this->config->getPassword()];
    }
}