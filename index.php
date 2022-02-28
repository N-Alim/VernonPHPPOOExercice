<?php

session_start();
date_default_timezone_set("Europe/Paris");
spl_autoload_register(function ($classname) 
{
    include "./classes/" . $classname . ".php";
});

$user = new User();
var_dump($user->getNomUser());