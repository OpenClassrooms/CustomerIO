<?php

namespace OpenClassrooms\CustomerIO\Tests\Impl;

use OpenClassrooms\CustomerIO\Client;
use OpenClassrooms\CustomerIO\Impl\GuzzleClient;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class GuzzleClientTest extends \PHPUnit_Framework_TestCase
{

    const SITE_ID = 123;

    const API_KEY = 456;

    /**
     * @var Client
     */
    private $client;

    /**
     * @test
     */
    public function Construct()
    {
        $this->client = new GuzzleClient(self::SITE_ID, self::API_KEY);

        $reflectionClass = new \ReflectionClass('OpenClassrooms\CustomerIO\Impl\GuzzleClient');
        $guzzleProperty = $reflectionClass->getProperty('guzzle');
        $guzzleProperty->setAccessible(true);
        $guzzle = $guzzleProperty->getValue($this->client);

        /** @var \Guzzle\Http\Client $guzzle */
        $this->assertEquals(Client::BASE_URL, $guzzle->getBaseUrl());
        $this->assertEquals($guzzle->getDefaultOption('auth'), array(self::SITE_ID, self::API_KEY));
    }
}
