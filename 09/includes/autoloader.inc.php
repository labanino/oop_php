<?php 

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
  $path = "classes/"; // directory name
  $extension = ".class.php";  // nameOfTheClass.class.php
  $fullPath = $path . str_replace('\\', '/', $className) . $extension;

  // include 'classes/' . str_replace('\\', '/', $classname) . '.class.php';

  if(!file_exists($fullPath)) {
    die("Ooops! It didn't work."); 
  }

  include_once $fullPath;
}