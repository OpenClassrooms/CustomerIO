<?php

namespace OpenClassrooms\CustomerIO\Impl;

use OpenClassrooms\CustomerIO\Client;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class GuzzleClient implements Client
{

    /**
     * @var \GuzzleHttp\ClientInterface
     */
    private $guzzle;

    public function __construct($siteId, $apiKey)
    {
        $this->guzzle = new \GuzzleHttp\Client(
            array(
                'base_url' => self::BASE_URL,
                'defaults' => array('auth' => array($siteId, $apiKey))
            )
        );
    }

    public function delete($uri)
    {
        $this->guzzle->delete($uri);
    }
}
