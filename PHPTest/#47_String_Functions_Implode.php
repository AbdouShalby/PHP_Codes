<?php

/*
 * Implode: implode(Separator <- Optional Default Value Is "" Empty String, Array) Separator Is Used To Make Separate For Array Elements
 * Join: join(Separator <- Optional Default Value Is "" Empty String, Array) Alias Name
 */

$arr = array("Ahmed", "Abdou", "Sayed", "Hassan");

$str = implode(" & ", $arr);

echo "Hello Our Moderators Name Is: " . $str;