<?php

/*
 * Switch: switch(Expression) {
 *     Case:
 *     // Code To Execute
 *     Break;
 * }
 *
 * You Can Type Many Cases For One Code
 */

$browser = "Google Chrome";

switch ($browser) {
    case "FireFox":
    case "Mozilla FireFox":
        echo "Your Favourite Browser Is FireFox";
        break;

    case "Google Chrome":
    case "Chrome":
    case "Chromium":
        echo "Your Favourite Browser Is Google Chrome This Is The Best";
        break;

    case "Opera":
        echo "Your Favourite Browser Is Opera";
        break;

    default:
        echo "Your Favourite Browser Is Not Here";
}