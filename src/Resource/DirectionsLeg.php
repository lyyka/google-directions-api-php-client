<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class DirectionsLeg
{
    public function __construct(
        private array $data
    ) { }

    /**
     * @return string
     */
    public function getEndAddress() : string
    {
        return $this->data['end_address'];
    }

    /**
     * @return LatLngLiteral
     */
    public function getEndLocation() : LatLngLiteral
    {
        return new LatLngLiteral($this->data['end_location']);
    }

    /**
     * @return string
     */
    public function getStartAddress() : string
    {
        return $this->data['start_address'];
    }

    /**
     * @return LatLngLiteral
     */
    public function getStartLocation() : LatLngLiteral
    {
        return new LatLngLiteral($this->data['start_location']);
    }

    /**
     * @return array|DirectionsStep[]
     */
    public function getSteps() : array
    {
        $res = [];
        foreach ($this->data['steps'] as $stepData) {
            $res[] = new DirectionsStep($stepData);
        }
        return $res;
    }

    // TODO - via_waypoint -
    // TODO - arrival_time -
    // TODO - departure_time -

    /**
     * @return TextValueObject
     */
    public function getDistance() : TextValueObject
    {
        return new TextValueObject($this->data['distance']);
    }

    /**
     * @return TextValueObject
     */
    public function getDuration() : TextValueObject
    {
        return new TextValueObject($this->data['duration']);
    }

    /**
     * @return TextValueObject
     */
    public function getDurationInTraffic() : TextValueObject
    {
        return new TextValueObject($this->data['duration_in_traffic']);
    }
}
