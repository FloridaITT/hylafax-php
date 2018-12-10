<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:07
 */

namespace FaxItApp\V1;


class HylafaxClientConfig
{
    /**
     * @var string
     */
    private $endpoint;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    public static function builder(): HylafaxClientConfigBuilder
    {
        return new HylafaxClientConfigBuilder();
    }

    /**
     * HylafaxClientConfig constructor.
     * @param string $endpoint
     * @param string $username
     * @param string $password
     */
    public function __construct(string $endpoint, string $username, string $password)
    {
        $this->endpoint = $endpoint;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

}