<?php

namespace OpenClassrooms\CustomerIO;

/**
 * @author Arnaud Lefevre <arnaud.lefevre@openclassrooms.com>
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
interface Client
{
    const BASE_URL = 'https://track.customer.io/api/v1/';

    /**
     * @param string $uri
     */
    public function delete($uri);

    /**
     * @param string $uri
     */
    public function unSubscribe($uri);
}
