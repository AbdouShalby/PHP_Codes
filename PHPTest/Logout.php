<?php

// Resume The Session
session_start();

// Unset
session_unset();

// Destroy
session_destroy();

print_r($_SESSION);