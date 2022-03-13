<?php

/*
 * Sleep: sleep(Seconds); // Sleep Code Execution
 * uSleep: usleep(MicroSeconds); // Sleep Code Execution ( 1 Second = 1 000 000 MicroSeconds )
 * time_sleep_until(Time);
 */

function checkFile() {
    if (file_exists("Filee.txt")) {
        echo "Good File Is Found";
    } else {
        // sleep(5);
        time_sleep_until(time() + 5 );
        checkFile();
    }
}

echo checkFile();