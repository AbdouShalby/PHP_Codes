<?php

/*
 * File Open: fopen(Filename Or URL, Mode, Include_Path <- Optional , Context <- Optional ); // Handle File To Be Ready For Next Step
 * File Read: fread(Handle, Length);
 *
 * Modes :
 * [1] r = Read Only Starting From Beginning Of The File [ File Must Be Existed ]
 * [2] r+ = Read And Write Starting From Beginning Of The File [ File Must Be Existed ]
 * [3] w = Write Only [ Open & Clear The Content ] + [ Create The File If Not Exists ]
 * [4] w+ = Write And Read [ Open & Clear The Content ] + [ Create The File If Not Exists ]
 * [5] a = Write Only [ Open & Write To The End Of The File ] + [ Create The File If Not Exists ]
 * [6] a+ = Write And Read [ Open & Write To The End Of The File ] + [ Create The File If Not Exists ]
 * [7] x = Write Only [ Create A New File ] + [ File Must Not Be Exists Or Give Error ]
 * [8] x+ = Write And Read [ Create A New File ] + [ File Must Not Be Exists Or Give Error ]
 *
 * How Is Operating System Handle The End Of Files :
 * Unix: \n
 * Windows: \r \n
 * Mac: \R
 */

$fileHandle = fopen("fOpen.txt", "r+");

$content = fread($fileHandle, filesize("fOpen.txt")); // You Can Type File Bytes In Length Field

echo $content;