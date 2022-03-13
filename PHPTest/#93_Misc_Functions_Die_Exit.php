<?php

/*
 * Exit: exit(Error Message); From Language Construct Mean Exit Execution
 * Die: die(Error Message); From Language Construct Mean Die Execution
 */

$file = "Abdou.txt";

$handle = @fopen($file, "r") // @ To Un Print The Error Message
or exit("Unable To Find $file");

echo "Hello I Will Write In File Now";