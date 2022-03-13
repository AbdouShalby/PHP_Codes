<?php

/*
 * File Put Contents: file_put_contents(File, Data, Mode <- Optional, Context <- Optional Used For Stream);
 * File Put Contents: Add Content Inside File If Not Exists, If Exists Add Only Content
 * Mode:
 * [Mode1] FILE_APPEND: Add Data Next To Last Updated Data
 * [Mode2] LOCK_EX: [Exclusive Lock] Remove All Contents And Put Only New Data
 * [Mode3] FILE_USE_INCLUDE_PATH:
 */

file_put_contents("File.txt", "This File Created With File Put Content In PHP"); // Try To Type New Data And See It
file_put_contents("File.txt", " <br> This Another Content", FILE_APPEND); // FILE APPEND Add Data Next To Last Updated Data
file_put_contents("File.txt", " 564642545", FILE_APPEND | LOCK_EX); // Remove All Contents And Put Only New Data, You Can Use 2 Tags With This -> | , Remove Append And See The Result for Lock Ex

include "File.txt";