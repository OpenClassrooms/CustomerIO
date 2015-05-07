<?php

namespace OpenClassrooms\CustomerIO\Tests;

use OpenClassrooms\CustomerIO\Client;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class ClientMock implements Client
{

    /**
     * @var string
     */
    public static $deletedUri;

    public function __construct()
    {
        self::$deletedUri = null;
    }

    public function delete($uri)
    {
        self::$deletedUri = $uri;
    }

}
