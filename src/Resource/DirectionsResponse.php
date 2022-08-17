<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class DirectionsResponse
{
    public function __construct(
        private array $data
    ) { }

    /**
     * @return array|DirectionsRoute[]
     */
    public function getRoutes() : array
    {

    }

    public function getStatus() : DirectionsStatus
    {
        return new DirectionsStatus($this->data['status']);
    }
}
