<?php

namespace OpenClassrooms\CustomerIO\Tests\Services\Impl;

use OpenClassrooms\CustomerIO\Services\Impl\CustomerServiceImpl;
use OpenClassrooms\CustomerIO\Tests\ClientMock;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
class CustomerServiceImplTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var CustomerServiceImpl
     */
    private $service;

    /**
     * @test
     */
    public function delete()
    {
        $this->service->delete(1);
        $this->assertEquals('customers/1', ClientMock::$deletedUri);
    }

    /**
     * @test
     */
    public function unSubscribe()
    {
        $this->service->unSubscribe(1);
        $this->assertEquals('customers/1', ClientMock::$unSubscribeUri);
    }

    protected function setUp()
    {
        $this->service = new CustomerServiceImpl();
        $this->service->setClient(new ClientMock());
    }

}
