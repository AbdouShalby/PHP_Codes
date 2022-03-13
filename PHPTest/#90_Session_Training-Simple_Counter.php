<?php

session_start();

$_SESSION["name"] = "Abdou";

include "c.php";

echo "<a href='About.php'>About</a> | ";

echo "<a href='test.php'>Test</a>";