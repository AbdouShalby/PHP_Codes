<?php

// Resume The Session

session_start();

echo "Hello " . $_SESSION["username"] . " How Are You ? <br>";
echo "Your Favourite Food Is " . $_SESSION["favfood"] . "<br>";

echo "<a href='Page3.php'>Room Number 3</a>";