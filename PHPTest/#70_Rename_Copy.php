<?php

/*
 * Rename: rename(OldName, NewName, Context <- Optional); // Work With File And Directory
 * Copy: copy(OldFile, NewFile);
 */

// copy("Copy.txt", "Copy_New.txt");

//if (!copy("Copy.txt", "Copy_New.txt")) {
//    echo "Sorry File Not Copied";
//} else {
//    echo "File Has Been Copied";
//}

//function copyMe($extension) {
//    $original = __FILE__;
//    return copy($original, $original . "." . $extension);
//}
//copyMe("backup");

rename("Rename.txt", __DIR__ . "/Rename/RenameNEW.txt"); // Rename And Move