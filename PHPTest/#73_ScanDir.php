<?php

/*
 * Scan Directory: scandir(Directory, Sort, Context);
 * . = Current File
 * .. = Parent File
 * Sort By Default Alphabetically
 * SCANDIR_SORT_DESCENDING = Reverse Alphabetically
 * SCANDIR_SORT_NONE = None Sorting
 */

$link = __DIR__ . "/ScanDir";

$files = scandir($link, SCANDIR_SORT_NONE);

echo "<pre>";
print_r($files);
echo "</pre>";

foreach ($files as $file) { // Delete All Files Inside The Directory Add Many File With Different Extensions To See The Result
    if (is_file($link . "/" . $file)) {
        unlink($link . "/" . $file);
    }
}