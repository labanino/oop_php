<?php

class NewClass {
  // Properties
  private $data = "I am a property";

  public function __construct() {
    echo "This class has been instantiated <br>";
  }

  public function setNewProperty($newdata) {
    $this->data = $newdata;
  }

  public function getProperty() {
    return $this->data . '<br>';
  }

  public function __destruct() {
    echo "This is the end of the class!";
  }
}