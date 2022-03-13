<?php

/*
 * Syntax
 * for ( Expression1; Expression2; Expression3 ) {
 *    Statement To Execute
 * }
 * Expression1 = Called ( Initial Counter ) Execute At Start Only 1 Time Without Any Condition
 * Expression2 = Always Executed If Its Value Is True
 * Expression3 = Its Work When Expression2 Is True
 */

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>

<label>
    <select name="year">
        <?php
        for ($year = 1900; $year <= 2021; $year++) {
            echo "<option value='$year'>" . $year . "</option>";
        }
        ?>
    </select>
</label>
<label>
    <select name="month">
        <?php
        for ($month = 1; $month <= 12; $month++) {
            echo "<option value='$month'>" . $month . "</option>";
        }
        ?>
</select>
</label>
<label>
    <select name="day">
        <?php
        for ($day = 1; $day <= 31; $day++) {
            echo "<option value='day'>" . $day . "</option>";
        }
        ?>
    </select>
</label>

<?php
$langs = array("HTML", "CSS", "JavaScript", "Ajax", "Python", "Ruby", "MySQL");
echo count($langs); // Count Let You Know How Many Object In The Array
$langsMax = count($langs);
echo "<ul>";
for ($i = 0; $i < $langsMax; $i++){
    echo "<li>" . $langs[$i] . "</li>";
}
echo "</ul>";

// Loop Advanced
$i = 1; //Expression1 [ Initial Counter ]
for ( ; ; ) {
    if ($i > 20){ //Expression2 [ Condition ]
        break;
    }
    echo $i . "<br>";
    $i++; //Expression3 [ Increment ]
}