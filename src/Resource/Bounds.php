<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class Bounds
{
    public function __construct(
        private array $data
    ) { }

    public function getNortheast() : LatLngLiteral
    {
        return new LatLngLiteral(
            $this->data['northeast']
        );
    }

    public function getSouthwest() : LatLngLiteral
    {
        return new LatLngLiteral(
            $this->data['southwest']
        );
    }
}
