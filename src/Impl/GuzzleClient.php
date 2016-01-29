<?php

namespace OpenClassrooms\CustomerIO\Impl;

use GuzzleHttp\RequestOptions;
use OpenClassrooms\CustomerIO\Client;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class GuzzleClient implements Client
{

    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzle;

    /**
     * @param string $siteId
     * @param string $apiKey
     */
    public function __construct($siteId, $apiKey)
    {
        $this->guzzle = new \GuzzleHttp\Client(
            [
                'base_uri'           => self::BASE_URL,
                RequestOptions::AUTH => [$siteId, $apiKey]
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function delete($uri)
    {
        $this->guzzle->delete($uri);
    }

    /**
     * @inheritdoc
     */
    public function unSubscribe($uri)
    {
        $this->guzzle->put($uri, ['json' => ['unsubscribed' => true]]);
    }
}
