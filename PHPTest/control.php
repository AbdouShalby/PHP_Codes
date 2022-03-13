<?php

session_start();

if (isset($_SESSION["user"])) {
    echo "Welcome " . $_SESSION["user"] . " You Are Admin";
} else {
    echo "Error: You Are Not Permitted To See This Page";
}