<?php

setcookie("Abdou", "Test", time() + 3600, "/");

if (count($_COOKIE) > 0) {
    echo "Good The Cookies Are Enabled For This Website";
} else {
    echo "Sorry The Cookies Are Not Enabled Please Enable It For Best Browsing";
}