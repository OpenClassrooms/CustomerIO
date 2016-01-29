<?php

namespace OpenClassrooms\CustomerIO\Tests;

use OpenClassrooms\CustomerIO\Client;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class ClientMock implements Client
{
    /**
     * @var string
     */
    public static $deletedUri;

    /**
     * @var string
     */
    public static $unSubscribeUri;

    public function __construct()
    {
        self::$deletedUri = null;
        self::$unSubscribeUri = null;
    }

    /**
     * @inheritdoc
     */
    public function delete($uri)
    {
        self::$deletedUri = $uri;
    }

    /**
     * @inheritdoc
     */
    public function unSubscribe($uri)
    {
        self::$unSubscribeUri = $uri;
    }
}
