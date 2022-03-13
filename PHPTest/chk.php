<?php

session_start();

$admins = array("Abdou", "Mahmoud", "Ibrahim");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["username"];

    if (in_array($user, $admins)) {
        // If Is Admin
        $_SESSION["user"] = $user;
        echo "Welcome " . $_SESSION["user"] . " You Will Be Redirected To Control Panel Area";
        header("REFRESH:5;URL=control.php");
    } else {
        // If Not Admin
        echo "Sorry " . $_POST["username"] . " You Are Not Admin And You Are Not Permitted To See Control Panel";
    }
} else {
    echo "Error: You Can't Browse This Page Directly";
}