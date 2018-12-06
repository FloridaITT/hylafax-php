<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 00:55
 */

namespace FaxItApp;


use FaxItApp\V1\SendFaxRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;

class HylafaxApiClientV1 implements HylafaxApiClient
{
    /**
     * @var Client
     */
    private $httpClient;

    private $baseUrl = 'http://localhost:8080/api/hylafax/v1/';

    public function __construct(string $baseUrl)
    {
        if ($baseUrl !== null) {
            $this->baseUrl = $baseUrl;
        }

        $this->httpClient = new Client([
            'base_uri' => $this->baseUrl,
        ]);
    }

    public function getCountries()
    {
        // TODO: Implement getCountries() method.
    }

    public function getAreaCodes()
    {
        // TODO: Implement getAreaCodes() method.
    }

    public function sendFax(SendFaxRequest $request)
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
                    'contents' => fopen($file, 'rb')
                ];
            }
            $response = $this->httpClient->post('faxes', [
                // http://docs.guzzlephp.org/en/stable/quickstart.html#sending-form-files
                RequestOptions::MULTIPART => $multiPart,
            ]);

            $response->getStatusCode(); // todo

        } catch (ServerException|ClientException $e) {
            // todo
        } catch (\Throwable $error) {
            // todo
        }


    }

    public function getFax(string $id)
    {
        try {
            $response = $this->httpClient->get(sprintf('faxes/%s', $id));
            // todo
        } catch (ServerException|ClientException $e) {
        } catch (\Throwable $error) {}
    }

    public function getFaxes()
    {
        // TODO: Implement getFaxes() method.
    }

    public function cancelFax(string $id)
    {
        try {
            $response = $this->httpClient->post(sprintf('faxes/%s/cancel', $id));
            // todo
        } catch (ServerException|ClientException $e) {
        } catch (\Throwable $error) {}
    }

    public function deleteFax(string $id)
    {
        try {
            $response = $this->httpClient->delete(sprintf('faxes/%s', $id));
            // todo
        } catch (ServerException|ClientException $e) {
        } catch (\Throwable $error) {}
    }
}