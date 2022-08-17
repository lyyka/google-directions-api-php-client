<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Location;

class LatLngLocation implements Location
{
    public function __construct(
        private float|int $lat,
        private float|int $lng,
    ) { }

    public function getUrlFriendlyString(): string
    {
        return "$this->lat,$this->lng";
    }
}
