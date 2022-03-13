<?php
// https://www.php.net/manual/en/filter.filters.php Check This Site To Know Filter Sanitize


$input = $_POST["test"];

// Sanitize Input
$goodInput = filter_var($input, FILTER_SANITIZE_EMAIL);

// Print The Result
// echo "Main Input = " . $input . "<br>"; // If We Print The Result Before Filter It Will Make A Bug

echo "Input After Sanitize = " . $goodInput . "<br>";

// Check For The Result
if (filter_var($goodInput, FILTER_VALIDATE_EMAIL) !== FALSE) {
    echo "Good";
} else {
    echo "Bad";
}