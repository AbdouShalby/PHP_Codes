<?php

$ticketPrice = 500;

if ($ticketPrice > 400 && $ticketPrice < 500) { // 400 - 499
    echo "Your Ticket Price Is " . $ticketPrice . " USD You Have 5% Discount";
} elseif ($ticketPrice >= 500) { // 500 - ??
    echo "Your Ticket Price Is " . $ticketPrice . " USD You Have 15% Discount";
} else {
    echo "Sorry Your Ticket Price Is " . $ticketPrice . " You Have No Discount";
}

/*
 * Syntax:
 * if (condition) {
 *     // Code To Run Is The Condition Is True
 * } elseif (condition) {
 *     // Code To Run Is The Condition Is True
 * } else {
 *     // Code To Run Is The Condition Is False
 * }
 */