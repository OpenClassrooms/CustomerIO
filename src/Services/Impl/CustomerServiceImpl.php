<?php

namespace OpenClassrooms\CustomerIO\Services\Impl;

use OpenClassrooms\CustomerIO\Client;
use OpenClassrooms\CustomerIO\Services\CustomerService;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class CustomerServiceImpl implements CustomerService
{

    const RESOURCE = 'customers/';

    /**
     * @var Client
     */
    private $client;

    /**
     * @inheritdoc
     */
    public function delete($customerId)
    {
        $this->client->delete(self::RESOURCE.$customerId);
    }

    /**
     * @inheritdoc
     */
    public function unSubscribe($customerId)
    {
        $this->client->unSubscribe(self::RESOURCE.$customerId);
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }
}
