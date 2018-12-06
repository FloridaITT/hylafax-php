<?php
/**
 * Created by IntelliJ IDEA.
 * User: vitaly
 * Date: 04/12/2018
 * Time: 01:36
 */

namespace FaxItApp\V1;

/**
 * Interface Request
 * @package FaxItApp\V1
 */
interface Request
{
    public function toArray(): array;
}