<?php

/*
 * [1] Check If The Directory Is Exist Or No
 * [2] Make The Directory
 * [3] Assign This Directory To Variable
 * [4] Create A File Inside This Directory
 * [5] Assign This File To Variable
 * [6] Change Mode Of This File To Be Read Only
 * [7] Check If This File Writeable
 * [8] Change Mode Of This File And Make It Writeable
 * [9] Include This File
 */

if (file_exists(__DIR__ . "/PHP")) { // [1] Check If The Directory Is Exist Or No
    echo "Sorry This Directory Is Exists <br>";
} else {
    mkdir(__DIR__ . "/PHP"); // [2] Make The Directory
}

$directory = __DIR__ . "/PHP/"; // [3] Assign This Directory To Variable

file_put_contents($directory . "text.php", "Hello"); // [4] Create A File Inside This Directory

$file = $directory . "text.php"; // [5] Assign This File To Variable

chmod($file, 0444); // [6] Change Mode Of This File To Be Read Only

if (is_writable($file)) { // [7] Check If This File Writeable
    file_put_contents($file, "File Is Not Writeable");
} else {
    chmod($file, 0755); // [8] Change Mode Of This File And Make It Writeable
    file_put_contents($file, "<?php echo \"Congratulation The Training Is Done\";");
}

include $file; // [9] Include This File