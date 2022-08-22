<?php 

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
  $path = "classes/"; // directory name
  $extension = ".class.php";  // nameOfTheClass.class.php
  require_once $path . str_replace('\\', '/', $className) . $extension;
}