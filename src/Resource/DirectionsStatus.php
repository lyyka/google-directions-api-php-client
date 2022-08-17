<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class DirectionsStatus
{
    const OK = 'OK';

    public function __construct(
        private string $status
    ) { }

    public function isOk() : bool
    {
        return $this->status === static::OK;
    }
}
