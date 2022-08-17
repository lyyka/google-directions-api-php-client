<?php

namespace Lyyka\GoogleDirectionsApiPhpClient\Resource;

class TextValueObject
{
    public function __construct(
        private array $data
    ) { }

    public function getText() : string
    {
        return $this->data['text'];
    }

    public function getValue() : float|int
    {
        return $this->data['value'];
    }
}
