<?php

/*
 * We Will Receive Information From LoginTest.php
 * Go To The LoginTest.php And Fill The Form To See The Result
 */

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $admins = array("Abdou", "Ibrahim"); // Example If You Type Any Name Of These In Username Field That Mean You Are Admin

    $username = $_GET["username"];

    //echo "You Send The Data With " . $_SERVER["REQUEST_METHOD"] . " Request <br>";

    //echo "Your Username Is: " . $_GET["username"] . "<br>";
    //echo "Your Password Is: " . $_GET["password"] . "<br>";

    if (in_array($username, $admins)) {
        echo "Welcome " . $username . " To Control Panel For Admins";
    } else {
        echo "Sorry This Username Is Not Exist In Our Client Area";
    }
} else {
    echo "Sorry You Cant Browse This Page Directly";
}