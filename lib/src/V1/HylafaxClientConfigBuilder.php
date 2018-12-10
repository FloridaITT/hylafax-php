<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 12:28
 */

namespace FaxItApp\V1;


class HylafaxClientConfigBuilder
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

    public function build(): HylafaxClientConfig
    {
        return new HylafaxClientConfig(
            $this->endpoint,
            $this->username,
            $this->password
        );
    }

    /**
     * @param string $endpoint
     * @return HylafaxClientConfigBuilder
     */
    public function setEndpoint(string $endpoint): HylafaxClientConfigBuilder
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @param string $username
     * @return HylafaxClientConfigBuilder
     */
    public function setUsername(string $username): HylafaxClientConfigBuilder
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param string $password
     * @return HylafaxClientConfigBuilder
     */
    public function setPassword(string $password): HylafaxClientConfigBuilder
    {
        $this->password = $password;
        return $this;
    }

}