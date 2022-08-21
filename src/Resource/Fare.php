<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;
class Fare
{
    public function __construct(
        private array $data
    ) { }

    public function getCurrency() : string
    {
        return $this->data['currency'];
    }

    public function getValue() : float
    {
        return $this->data['value'];
    }

    public function getText() : string
    {
        return $this->data['text'];
    }
}
