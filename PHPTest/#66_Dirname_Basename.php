<?php

/*
 * Directory Name: dirname(path); In Windows = Folder Name
 * Basename: basename(Patch, Suffix <- Optional) In Windows = File Name, Suffix = Extension Name
 */

// echo __FILE__;
// echo dirname("C:/xampp/htdocs/php_course/PHPTest/#66_Dirname_Basename.php");
// echo dirname(__FILE__);
// echo dirname(__FILE__, 2); // Optional Level PHP 7.0.0
// include dirname(__FILE__) . "/../inc/test.php";
// include __DIR__ . "/../inc/test.php"; // PHP 5.3.0


echo basename(__FILE__) . "<br>";
echo basename(__FILE__, ".php") . "<br>"; // When You Input True Suffix You Will Get Only File Name Without Extension Else You Will Get The File With His Extension
echo "Your File Name Is " . basename(__FILE__, ".php") . "<br>"; // Example For Suffix Usage

if (basename(__FILE__, ".php") === "#66_Dirname_Basename") { // Remove The Suffix To See What's Different
    echo "Good Your File Is Ready Now";
} else {
    echo "Sorry Your File Is Not Ready Now";
}