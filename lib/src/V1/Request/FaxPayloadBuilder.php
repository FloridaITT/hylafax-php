<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 2019-03-05
 * Time: 00:51
 */

namespace FaxItApp\V1\Request;

/**
 * Class FaxPayloadBuilder
 * @package FaxItApp\V1\Request
 */
class FaxPayloadBuilder
{
    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $user;

    /**
     * @return FaxPayload
     */
    public function create(): FaxPayload
    {
        return new FaxPayload(
            $this->source,
            $this->user
        );
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }
}