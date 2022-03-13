<?php

/*
 * Explode: explode(Separator, String, Limit <- Optional By Default) // Split String Into Array / Limit Positive Number Is Maximum Element And Negative Number Is Make All String Into Array Except Last Elements From Negative Number / 0 Is Mean 0 Index All String Is One Array Element
 */

$str = "Hello I Love PHP Too Much";

echo $str . "<br>";

$arr = explode(" ", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";

$str = "widget,clock,header,footer";

echo $str . "<br>";

$arr = explode(",", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";

for ($i = 0; $i < count($arr); $i++) {
    echo "<link rel='stylesheet href='css/" . $arr[$i] . ".css'>"; // Check Inspect To See The Result
}

$str = "form,learn,lesson,article";

echo $str . "<br>";

$arr = explode(",", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";

for ($i = 0; $i < count($arr); $i++) {
    echo "<span class='tag'>" . $arr[$i] . "</span>"; // Check Inspect To See The Result
}