<?php

/*
 * File Exists
 */

echo dirname(__FILE__) . "<br>"; // To Know File Path

$file = 'NewText.txt';
if ( file_exists($file) ){
    echo "Good The File [ " . $file . " ] Is Found <br>";

    file_put_contents($file, "Added With PHP File Put Content");
} else {
    echo "Sorry The File [ " . $file . " ] Is Not Found But I Created It With PHP <br>";
    file_put_contents($file, "Created By PHP"); // By Default If It Not Found The File It Will Create It
}

if ( is_writable($file) ){
    echo "Good The File [ " . $file . " ] Is Writable <br>";

    file_put_contents($file, "The File Is Writable");
} else {
    echo "Sorry The File [ " . $file . " ] Is Not Found Writable So I Can\'t Add Content To It <br>";

    file_put_contents($file, "Created By PHP"); // That Will Make Warning If The File Readonly Because It's Failed To Get Permission
}