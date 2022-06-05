<?php

class EnvironmentAndSupply {
    public $temperature;
    public $humidity;
    public $foodLevel;
    public $waterLevel;
    public $timestamp;

    public function __construct($temperature, $humidity, $foodLevel, $waterLevel, $timestamp){
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->foodLevel = $foodLevel;
        $this->waterLevel = $waterLevel;
        $this->timestamp = $timestamp;
    }
}

?>