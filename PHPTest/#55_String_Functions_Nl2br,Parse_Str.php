<?php

/*
 * Parse String: parse_str(String, Array <- Optional)
 * NL2BR: New Line To Break Tag <br>
 * nl2br(String, Xhtml <- Optional Default Value Is True)
 */

$link = "name=Abdou&age=32&year=2021&skill=1";

echo $link . "<br>";

parse_str($link);
echo $name . "<br>";
echo $age . "<br>";
echo $year . "<br>";
echo $skill . "<br>";


parse_str($link, $myData);
echo "<pre>";
print_r($myData);
echo "</pre>";

$str = "Hello \n I Love PHP \n Although \n I Love JS \n";
echo ($str); // Check Inspect For Result
echo nl2br($str); // Let \n Show Result On Normal Page