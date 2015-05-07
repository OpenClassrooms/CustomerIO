<?php

namespace OpenClassrooms\CustomerIO\Services;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */

interface CustomerService
{
    public function delete($customerId);
}
