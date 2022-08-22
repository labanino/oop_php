<?php

class House {
  // Properties
  public $street;
  public $number;

  // Constructor
  public function __construct($street, $number) {
    $this->street = $street;
    $this->number = $number;
  }

  // Methods
  public function getAddress() {
    $address = $this->street . " " . $this->number;
    return $address;
  }
}