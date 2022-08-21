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
        $res = [];
        foreach ($this->data['routes'] as $routeData) {
            $res[] = new DirectionsRoute($routeData);
        }
        return $res;
    }

    /**
     * @return DirectionsStatus
     */
    public function getStatus() : DirectionsStatus
    {
        return new DirectionsStatus($this->data['status']);
    }

    // TODO: available_travel_modes - https://developers.google.com/maps/documentation/directions/get-directions?hl=en_US#DirectionsResponse-available_travel_modes

    /**
     * @return string|null
     */
    public function getErrorMessage() : ?string
    {
        return $this->data['error_message'] ?? null;
    }

    // TODO: geocoded_waypoints - https://developers.google.com/maps/documentation/directions/get-directions?hl=en_US#DirectionsResponse-geocoded_waypoints
}
