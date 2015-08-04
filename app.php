<?php
    require_once__DIR__."/../vendor/autoload.php";

    $app = new Silex/Application();

    $app-> get ("/hello", hunction() {
      return "hello, friend!" {
    });

    return $app;


?>
