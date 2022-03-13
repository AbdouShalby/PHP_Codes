<?php

/*
 * What Can PHP Filter ?
 * User Input
 * Cookies
 * Web Service
 * Server Variables
 * Database Query Result
 */

//foreach (filter_list() as $filter) { // To Know Filter List
//    echo $filter . "<br>";
//}

?>

<form action="Filter.php" method="POST">
    <input type="text" name="test"> <!-- Try To Send Code Syntax In Input Like <script>alert('Hello I'm Hacked You')</script> -->
    <input type="submit" value="Send">
</form>
