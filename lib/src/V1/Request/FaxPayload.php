<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 2019-03-05
 * Time: 00:51
 */

namespace FaxItApp\V1\Request;

/**
 * Class FaxPayload
 * @package FaxItApp\V1\Request
 */
class FaxPayload
{
    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $user;

    public static function builder(): FaxPayloadBuilder
    {
        return new FaxPayloadBuilder();
    }

    /**
     * FaxPayload constructor.
     * @param string $source
     * @param string $user
     */
    public function __construct(string $source, string $user)
    {
        $this->source = $source;
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }
}