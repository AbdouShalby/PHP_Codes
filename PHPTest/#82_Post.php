<?php

/*
 * We Will Receive Information From LoginTest.php
 * Go To The LoginTest.php And Fill The Form To See The Result
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admins = array("Abdou", "Ibrahim"); // Example If You Type Any Name Of These In Username Field That Mean You Are Admin

    $username = $_POST["username"];

    //echo "You Send The Data With " . $_SERVER["REQUEST_METHOD"] . " Request <br>";

    //echo "Your Username Is: " . $_POST["username"] . "<br>";
    //echo "Your Password Is: " . $_POST["password"] . "<br>";

    if (in_array($username, $admins)) {
        echo "Welcome " . $username . " To Control Panel For Admins";
    } else {
        echo "Sorry This Username Is Not Exist In Our Client Area";
    }
} else {
    echo "Sorry You Cant Browse This Page Directly";
}