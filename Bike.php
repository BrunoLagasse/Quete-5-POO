<?php
    require 'Vehicle.php';
    require_once "LightableInterface.php";

    class Bike extends Vehicle implements LightableInterface
    {
        private $lights;

        public function __construct(string $color, int $seatsNumber)
        {
            parent::__construct($color, $seatsNumber);
        }
        public function switchOn(): bool
        {
            if ($this->currentSpeed > 10)
            {
                return true;
            }
        }
        public function switchOff(): bool
        {
            return false;
        }       
    }