<?php

// Resume The Session

session_start();

echo "Hello " . $_SESSION["username"] . " You Are In Room 5<br>";

echo "Your Favourite Food Now Is " . $_SESSION["favfood"] . "<br>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<a href='Logout.php'>Exit</a>";