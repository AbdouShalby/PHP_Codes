<?php

/*
 * Trim: trim(String, CharacterList <- Optional)
 * Left Trim: ltrim(String, CharacterList <- Optional)
 * Right Trim: rtrim(String, CharacterList <- Optional)
 * CharacterList By Default Trim These Tags
 * \0 Null
 * \t Tab
 * \n New Line
 * \r Carriage Return
 * \x0b Vertical Tab
 * " " Space
 */

$str = "I Love PHP";
echo var_dump($str) . "<br>";

$str = "\x0b \x0b \x0b I Love PHP \x0b \x0b \x0b ";
echo var_dump($str) . "<br>";

$trimmed = trim($str);
echo var_dump($trimmed) . "<br>";

$ltrimmed = ltrim($str);
echo var_dump($ltrimmed) . "<br>";

$rtrimmed = rtrim($str);
echo var_dump($rtrimmed) . "<br>";

$str1 = "I Love PHP So Much";
$trimmed1 = trim($str1, "I Loh");
echo ($trimmed1) . "<br>";