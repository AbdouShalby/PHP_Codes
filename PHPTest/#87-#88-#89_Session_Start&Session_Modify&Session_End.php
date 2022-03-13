<?php

session_start(); // Start Or Resume Session
$_SESSION["username"] = "Abdou";
$_SESSION["favfood"] = "Pizza";

echo "<a href='Page2.php'> Room Number 2 </a>";