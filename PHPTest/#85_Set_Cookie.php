<?php

/*
 * Set Cookie: setcookie(Name <- Only Required , Value, Expire, Path, Domain, Secure, HttpOnly)
 * Name: Name Of The Cookie
 * Value: Content Of The Cookie
 * Expire: Expiration Date
 * Path:
 */

setcookie("Ay7aga", "Test4", time() + (86400 * 10), "/", "localhost");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";