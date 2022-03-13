<?php

/*
 * Advanced Function
 * [ 1 ] Function With Arguments
 * [ 2 ] Function Inside Function
 * [ 3 ] If, Else Condition
 * [ 4 ] Comparison Operator
 * [ 5 ] Concatenation
 * [ 6 ] String Operators
 * [ 7 ] Function Return
 */

echo "<h2>Example 1</h2>";
function sayHello($user, $age = "Unknown", $skill = 5) {
    // How To Use Default Value For Argument The Best Way Is To Use Argument With Default Value At The Last
    return "Hello " . $user . " Your Age Is " . $age . " And Your Skill Years Is " . $skill . "<br>";
}
echo sayHello("Abdou", "24");

echo "<h2>Example 2</h2>";
function getTicket( $user, $age ) {
    $ticket = mt_rand(5000, 1000000); // <- rand or mt_rand Is Built In Function In PHP Give You Random Number Between Selected
    if ($age >= 30) {
        $msg = "Hello " . $user . " Your Age Is " . $age . "<br>";
        $msg .= "You Are Qualified To Get A Ticket Congrats :)" . "<br>";
        $msg .= "Your Ticket ID Is : [ <span>" . $ticket . "</span> ]";
    } else {
        $msg = "Hello " . $user . " Your Age Is " . $age . "<br>";
        $msg .= "You Are Not Qualified To Get A Ticket Sorry :(";
    }
    return $msg;
}
$id = getTicket("Abdou", 35);

function makeFrame($element) {
    $frame = "<div class='nice-frame'>";
    $frame .= $element;
    $frame .= "</div>";

    return $frame;
}
$myElement = makeFrame($id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Advanced Function</title>
    <style>
        .nice-frame {
            padding: 10px;
            text-align: center;
            width: 400px;
            margin: 20px auto;
            border-radius: 10px;
            background-color: #EEE;
            border: 1px solid #CCC;
            font-family: Tahoma, Arial, serif;
            line-height: 2;
        }
        .nice-frame span {
            font-weight: bold;
            color: #F00;
        }
    </style>
    </head>
    <body>
    <?php echo $myElement ?>
    </body>
</html>
