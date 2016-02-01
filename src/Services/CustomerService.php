<?php

namespace OpenClassrooms\CustomerIO\Services;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
interface CustomerService
{
    /**
     * @param int $customerId
     */
    public function delete($customerId);

    /**
     * @param int $customerId
     */
    public function unSubscribe($customerId);
}
