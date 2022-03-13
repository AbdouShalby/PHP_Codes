<?php

$string = $_POST["test"];
echo filter_var($string, FILTER_SANITIZE_STRING);