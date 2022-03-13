<?php

echo "<h2>Indexed Array</h2>";
echo "----------------------------------------------------------------------------------";
$indexedArray = array(
    "Abdou",    //0
    "Ibrahim",  //1
    "Mahmoud",  //2
    "Ahmed",    //3
    "Yousef",   //4
    "Mohamed"   //5
);

$indexedArray[] = "Zeyad"; //6 // To Add New Item Inside Array

echo "<pre>"; // Pre Formatted Code, This HTML Code Used To Make Array Is More Readable
print_r($indexedArray); // To See Array Structure
echo "</pre>"; // Pre Formatted Code Close Tag

echo $indexedArray[6] . "<br><br>"; // To Print Item Inside Value With Index Number

foreach ($indexedArray as $val) { // Loop Inside Array To Print Array Items
    echo $val . "<br>";
}
echo "----------------------------------------------------------------------------------";

echo "<h2>Associative Array</h2>";
echo "=================================================";
$associativeArray = array(
    "BooDi" => "Abdou",
    "Hema"  => "Ibrahim",
    "Hoda"  => "Mahmoud",
    "Figo"  => "Ahmed",
    "Joo"   => "Yousef",
    "Bord"  => "Mohamed"
);

$associativeArray["Zoz"] = "Zeyad"; // To Add New Item Inside Array

echo "<pre>"; // Pre Formatted Code, This HTML Code Used To Make Array Is More Readable
print_r($associativeArray); // To See Array Structure
echo "</pre>"; // Pre Formatted Code Close Tag

echo $associativeArray["BooDi"] . "<br><br>"; // To Print Item Inside Value With Index Number

foreach ($associativeArray as $key => $val) { // Loop Inside Array To Print Array Items
    echo $key . " => " . $val . "<br>";
}
echo "=================================================";

echo "<h2>Multi Dimensional Array</h2>";
echo "########################################################";
$diet = array(
    "Day1" => array("Banana", "Apple", "Bread"),
    "Day2" => array("Meat", "Bread", "Sugar"),
    "Day3" => array("Fish", "Salt", "Apple")
);

echo "<pre>"; // Pre Formatted Code, This HTML Code Used To Make Array Is More Readable
print_r($diet); // To See Array Structure
echo "</pre>"; // Pre Formatted Code Close Tag

echo $diet["Day1"][0] . "<br><br>"; // To Print Item Inside Value With Index Number

foreach ($diet as $day => $food) { // Loop Inside Array To Print Array Items
    echo "<h3>In " . $day . " I Will Eat</h3>";
    foreach ($food as $item) {
        echo " - " . $item . "<br>";
    }
}
echo "########################################################";