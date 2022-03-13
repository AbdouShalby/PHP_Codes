<?php

/*
 * Syntax: define(Name, Value, Case-Insensitive);
 * Syntax: const NAME = Value;
 * Case-Insensitive By Default False
 * Constant Is Global Scope Can Call At Any Page From Any Function
 * Constant Can't Be Redefine
 */

define("SITE_STATUS", true);

// const SITE_STATUS = true;

if (SITE_STATUS === true) {

    $firstName = "Abdou";
    echo $firstName . "<br/>"; // Variable

    define("FIRSTNAME", "Abdou", true);
    echo FirstName . "<br/>"; // Constant

    define("LASTNAME", "Shalby");
    echo LASTNAME . "<br/>"; // Constant

    echo PHP_INT_MAX . "<br>";
    echo __FILE__ . "<br>";
    echo __DIR__ . "<br>";
    echo __LINE__ . "<br>";
} else {
    echo "Website Is Closed For Maintenance";
}