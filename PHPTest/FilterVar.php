<?php
// https://www.php.net/manual/en/filter.filters.php Check This Site To Know Filter Types

$input = $_POST["test"];

$opt = array(
    "options" => array("min_range" => "1", "max_range" => "999"),
    "flags" => FILTER_FLAG_ALLOW_HEX
);

if (filter_var($input, FILTER_VALIDATE_INT, $opt) !== FALSE) {
    echo "Good The " . $input . " Is From 1 - 999";
} else {
    echo "The " . $input . " Must Be Between 1 - 999";
}