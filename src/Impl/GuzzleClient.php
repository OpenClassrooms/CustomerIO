<?php

namespace OpenClassrooms\CustomerIO\Impl;

use OpenClassrooms\CustomerIO\Client;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class GuzzleClient implements Client
{

    /**
     * @var \Guzzle\Http\Client
     */
    private $guzzle;

    public function __construct($siteId, $apiKey)
    {
        $this->guzzle = new \Guzzle\Http\Client(self::BASE_URL);
        $this->guzzle->setDefaultOption('auth', array($siteId, $apiKey));
    }

    public function delete($uri)
    {
        $this->guzzle->delete($uri);
    }
}
