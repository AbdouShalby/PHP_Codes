<?php

session_start();

echo "Hello " . $_SESSION["name"] . " How Are You ?";

include "c.php";

echo "<a href='%2390_Session_Training-Simple_Counter.php'>Home</a>";