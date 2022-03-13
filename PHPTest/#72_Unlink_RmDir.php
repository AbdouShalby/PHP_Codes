<?php

/*
 * Unlink: unlink(Filename, Context); // Delete Path Or File, Deleted File Or Path Should Be Writeable
 * RmDir: rmdir(Directory); // To Remove Directory Or File On Windows
 */

// unlink("Remove.txt"); // Create Any File And Type His Name Here To Make A Test But Its Should Be Writeable

$file = "Remove.txt";
if (file_exists($file) && is_writable($file)) { // Here Check If The File Is Writeable And Exists If True File Will Deleted
    unlink($file);
    echo "File Deleted";
} elseif (!file_exists($file)){ // Here Check If The File Is Not Exists If True Will Print Error Message
    echo "File Is Not Exists";
} else { // Here Tell You The File Is Readonly And Change His Mode To Writeable
    echo "Sorry This File Is Readonly Permission Will Changed To Writeable Reload Again To Remove";
    chmod($file, 0777); // This Line To Change The File Properties To Writeable
}

rmdir("Filename"); // Directory Should Be Empty