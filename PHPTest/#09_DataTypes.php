<?php

/*
 * -> Get Type To Know The Type Only
 * -> Var Dump To Know The Type And Length And Variable Contain
 */

// Data Type [1] String
$var1 = "I Love PHP";
echo "<h1>String</h1>";
echo $var1;
echo "<br/><br/><h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var1);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var1);
echo "<br/><br/><br/>";

// Data Type [2] Integer
echo "<h1>Integer</h1>";
$var2 = 100;
echo $var2;
echo "<br/><br/><h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var2);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var2);
echo "<br/><br/><br/>";

// Data Type [3] Boolean
echo "<h1>Boolean</h1>";
$var3 = TRUE; // True Equal 1
$var4 = FALSE; // False Equal 0 And Print NoThing But You Can Know The Type Of It
echo $var3;
echo $var4;
echo "<br/><br/><h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var3);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var3);
echo "<br/>";
echo "<br/><br/><h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var4);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var4);
echo "<br/><br/><br/>";

// Data Type [4] Floating Point Number AKA Double
echo "<h1>Floating Point Number AKA Double</h1>";
$var5 = 10.5;
echo $var5;
echo "<br/><br/><h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var5);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var5);
echo "<br/><br/><br/>";

// Data Type [5] Array Can Contain Mixed Data
echo "<h1>Array</h1>";
$var6 = array(
    "A" => "Val1",
    "B" => "Val2",
    "C" => "Val3",
);
// echo $var6; -> You Can't Print Array Type With echo You Will Get Error
echo "<h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var6);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var6);
echo "<br/><br/><br/>";

// Data Type [6] NULL Special Type Of Data Type Equal Empty Value
echo "<h1>NULL</h1>";
$var7 = NULL;
// echo $var7; You Can't Print Null Value Because It's NoThing
echo "<h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var7);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var7);
echo "<br/><br/><br/>";

// Data Type [7] Object
echo "<h1>Object</h1>";
class Book {
    function Book() {
        $this->genere = "Adventure";
    }
}
$var8 = new Book();
echo "<h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var8);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var8);
echo "<br/><br/><br/>";

// Data Type [8] Resource
echo "<h1>Resource</h1>";
$var9 = fopen('Text.txt', 'r');
echo "<h4 style='display: inline'>Get Type Result ----> </h4>";
echo gettype($var9);
echo "<br/><h4 style='display: inline'>Variable Dump Result ----> </h4>";
var_dump($var9);
echo "<br/><br/><br/>";