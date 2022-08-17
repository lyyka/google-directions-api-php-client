<?php

namespace Lyyka\GoogleDirectionsApiPhpClient;

use Lyyka\GoogleDirectionsApiPhpClient\Location\Location;
use Lyyka\GoogleDirectionsApiPhpClient\Resource\DirectionsResponse;

class GoogleDirectionsApi
{
    const BASE_API_URL = 'https://maps.googleapis.com/maps/api/directions';
    const RESPONSE_FORMAT = 'json';

    private string $apiKey;

    private Location $origin;
    private Location $destination;
    private array $params;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function withParams(array $params) : static
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @param Location $location
     * @return $this
     */
    public function from(Location $location) : static
    {
        $this->origin = $location;
        return $this;
    }

    /**
     * @param Location $location
     * @return $this
     */
    public function to(Location $location) : static
    {
        $this->destination = $location;
        return $this;
    }

    /**
     * @return array
     */
    public function constructParams() : array
    {
        return array_merge(
            $this->params,
            [
                'origin' => $this->origin->getUrlFriendlyString(),
                'destination' => $this->destination->getUrlFriendlyString()
            ]
        );
    }

    /**
     * @return string
     */
    private function constructUrl() : string
    {
        return static::BASE_API_URL . '/' . static::RESPONSE_FORMAT;
    }

    /**
     * @return DirectionsResponse
     */
    public function get() : DirectionsResponse
    {
        $response = [];
        return new DirectionsResponse($response);
    }
}
