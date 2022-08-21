<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class DirectionsRoute
{
    public function __construct(
        private array $data
    ) { }

    /**
     * @return Bounds
     */
    public function getBounds() : Bounds
    {
        return new Bounds(
            $this->data['bounds']
        );
    }

    /**
     * @return string
     */
    public function getCopyrights() : string
    {
        return $this->data['copyrights'];
    }

    /**
     * @return array|DirectionsLeg[]
     */
    public function getLegs() : array
    {
        $res = [];
        foreach ($this->data['legs'] as $legData) {
            $res[] = new DirectionsLeg($legData);
        }
        return $res;
    }

    // TODO: overview_polyline - https://developers.google.com/maps/documentation/directions/get-directions?hl=en_US#DirectionsRoute-overview_polyline

    /**
     * @return string
     */
    public function getSummary() : string
    {
        return $this->data['summary'];
    }

    /**
     * @return array|string[]
     */
    public function getWarnings() : array
    {
        return $this->data['summary'];
    }

    /**
     * @return array|int[]
     */
    public function getWaypointOrder() : array
    {
        return $this->data['waypoint_order'];
    }

    /**
     * @return Fare
     */
    public function getFare() : Fare
    {
        return new Fare($this->data['fare']);
    }
}
