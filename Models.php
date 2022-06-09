<?php

class Account {
    public $username;
    public $name;

    public function __construct($username, $name){
        $this->username = $username;
        $this->name = $name;
    }
}

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

class DispenseLogs {
    public $time;
    public $temperature;
    public $humidity;
    public $serving;
    public $mode;

    public function __construct($time, $temperature, $humidity, $serving, $mode){
        $this->time = $time;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->serving = $serving;
        $this->mode = $mode;
    }
}

class DispenseSlots {
    public $time;
    public $serving;
    
    public function __construct($time, $serving){
        $this->time = $time;
        $this->serving = $serving;
    }
}
?>