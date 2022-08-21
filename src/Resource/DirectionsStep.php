<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class DirectionsStep
{
    public function __construct(
        private array $data
    ) { }

    public function getDuration() : TextValueObject
    {
        return new TextValueObject($this->data['duration']);
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
    public function htmlInstructions() : string
    {
        return $this->data['html_instructions'];
    }

    // TODO - polyline

    /**
     * @return LatLngLiteral
     */
    public function getStartLocation() : LatLngLiteral
    {
        return new LatLngLiteral($this->data['start_location']);
    }

    // TODO - travel_mode

    /**
     * @return TextValueObject
     */
    public function getDistance() : TextValueObject
    {
        return new TextValueObject($this->data['distance']);
    }

    /**
     * @return string
     */
    public function maneuver() : string
    {
        return $this->data['maneuver'];
    }

    /**
     * @return array|DirectionsStep[]
     */
    public function steps() : array
    {
        $res = [];
        foreach ($this->data['steps'] as $innerStepData) {
            $res[] = new DirectionsStep($innerStepData);
        }
        return $res;
    }

    // TODO - transit_details
}
