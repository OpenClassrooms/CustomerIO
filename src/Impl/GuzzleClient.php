<?php

namespace OpenClassrooms\CustomerIO\Impl;

use GuzzleHttp\RequestOptions;
use OpenClassrooms\CustomerIO\Client;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class GuzzleClient implements Client
{

    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzle;

    public function __construct($siteId, $apiKey)
    {
        $this->guzzle = new \GuzzleHttp\Client(
            array(
                'base_uri' => self::BASE_URL,
                RequestOptions::AUTH => array($siteId, $apiKey)
            )
        );
    }

    public function delete($uri)
    {
        $this->guzzle->delete($uri);
    }
}
