<?php

namespace OpenClassrooms\CustomerIO;

/**
 * @author Bastien Rambure <bastien.rambure@openclassrooms.com>
 */
interface Client
{
    const BASE_URL = 'https://track.customer.io/api/v1/';

    public function delete($uri);
}
