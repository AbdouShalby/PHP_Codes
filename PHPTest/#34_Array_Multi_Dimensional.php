<?php

/*
 * Multi Dimensional Array
 * Syntax :
 * array(
 *    array(Element, Element, Element),
 *    array(Element, Element, Element),
 *    array(Element, Element, Element)
 * );
 */
echo "<h2>Multi Dimensional Indexed Arrays</h2>";
$diet = array(
    array("Apple", "Banana", "Milk"), // 0 Index
    array("Meat", "Apple", "Egg"), // 1 Index
    array("Fish", "Apple"), // 2 Index
    array("Rice", "Apple"), // 3 Index
    array("Bread", "Apple", "Banana"), // 4 Index
    array(
        array("Abdou", "Ibrahim", "Mahmoud"),
        array("Yousef", "Ahmed", "Mohamed")
    )
);

echo "<pre>";
print_r($diet);
echo "</pre>";

echo $diet[5][1][0];


echo "<br>------------------------------------------------------------------------------------------------------";
echo "<h2>Multi Dimensional Associative Arrays</h2>";
$diet2 = array(
    "Day One"   => array("Apple", "Banana", "Meat"),
    "Day Two"   => array("Watermelon", "Strawberry", "Mango"),
    "Day Three" => array("Rice", "Fish", "Bread"),
    "Day Four"  => array("Kiwi", "Egg", "Milk"),
    "Day Five"  => array(
        "Salt"  => "10%",
        "Sugar" =>"20%")
);

echo "<pre>";
print_r($diet2);
echo "</pre>";

echo $diet2["Day Five"]["Salt"];