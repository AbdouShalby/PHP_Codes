<?php

/*
 * Path Info: pathinfo(Path, Options <- Optional)
 * Options:
 * [Option1] PATHINFO_ALL <- By Default Value
 * [Option2] PATHINFO_DIRNAME
 * [Option3] PATHINFO_BASENAME
 * [Option4] PATHINFO_EXTENSION
 * [Option5] PATHINFO_FILENAME
 */

echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";