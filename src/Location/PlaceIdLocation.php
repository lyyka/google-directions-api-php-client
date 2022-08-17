<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Location;

class PlaceIdLocation implements Location
{
    public function __construct(
        private string $placeId
    ) { }

    public function getUrlFriendlyString(): string
    {
        return "place_id:$this->placeId";
    }
}
