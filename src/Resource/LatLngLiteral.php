<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class LatLngLiteral
{
    public function __construct(
        private array $data
    ) { }

    public function getLat() : string
    {
        return $this->data['lat'];
    }

    public function getLng() : float|int
    {
        return $this->data['lng'];
    }
}
