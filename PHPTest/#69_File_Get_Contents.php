<?php

/*
 * File Get Contents: file_get_contents(Path, Include_Path <- Optional, Context <- Optional, Offset <- Optional, Max_Length <- Optional);
 */

$data = file_get_contents("File.txt", false, NULL, 10, 12);

file_put_contents("File.txt", "<br>" . $data, FILE_APPEND);

include "File.txt"; // Every Refresh Add New Result