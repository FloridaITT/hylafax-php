<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 10/12/2018
 * Time: 15:56
 */

namespace FaxItApp\Exception;


class HylafaxException extends \Exception
{

    public static function failedToSendFax(\Throwable $e): HylafaxException
    {
        return new self('Failed to send fax', $e->getCode(), $e);
    }

    public static function failedToGetFax(string $id, \Throwable $e): HylafaxException
    {
        return new self('Failed to get fax #' . $id, $e->getCode(), $e);
    }

    public static function failedToGetFaxCollection(\Throwable $e): HylafaxException
    {
        return new self('Failed to get fax collection', $e->getCode(), $e);
    }

    public static function failedToCancelFax(string $id, \Throwable $e): HylafaxException
    {
        return new self('Failed to cancel fax #' . $id, $e->getCode(), $e);
    }

    public static function failedToDeleteFax(string $id, \Throwable $e): HylafaxException
    {
        return new self('Failed to delete fax #' . $id, $e->getCode(), $e);
    }

    public static function failedToGetCountryCollection(\Throwable $e): HylafaxException
    {
        return new self('Failed to get country collection', $e->getCode(), $e);
    }

    public static function failedToGetAreaCodeCollection(\Throwable $e): HylafaxException
    {
        return new self('Failed to get area code collection', $e->getCode(), $e);
    }
}