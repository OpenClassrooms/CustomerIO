<?php

namespace OpenClassrooms\CustomerIO\Services\Impl;

use OpenClassrooms\CustomerIO\Client;
use OpenClassrooms\CustomerIO\Services\CustomerService;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class CustomerServiceImpl implements CustomerService
{

    const RESOURCE = 'customers/';
    /**
     * @var Client
     */
    private $client;

    public function delete($customerId)
    {
        $this->client->delete(self::RESOURCE.$customerId);
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }



}
