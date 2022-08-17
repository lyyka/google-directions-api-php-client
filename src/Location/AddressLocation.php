<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Location;

class AddressLocation implements Location
{
    public function __construct(
        private string $address
    ) { }

    public function getUrlFriendlyString(): string
    {
        return urlencode($this->address);
    }
}
