<?php

namespace OpenClassrooms\CustomerIO\Tests\Services\Impl;

use OpenClassrooms\CustomerIO\Services\Impl\CustomerServiceImpl;
use OpenClassrooms\CustomerIO\Tests\ClientMock;

/**
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
    public function Delete()
    {
        $this->service->delete(1);
        $this->assertEquals('customers/1', ClientMock::$deletedUri);
    }

    protected function setUp()
    {
        $this->service = new CustomerServiceImpl();
        $this->service->setClient(new ClientMock());
    }

}
