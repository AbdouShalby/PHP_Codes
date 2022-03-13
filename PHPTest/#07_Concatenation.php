<?php
    $lessonName     = "Concatenation";
    $homePage       = "PHP - " . $lessonName;
    $heading        = "Welcome To " . $lessonName;
    $brief          = "This Lesson Talk About " . $lessonName . " And How To Use It";
    $var1           = "Start";
    $var2           = "End";
    $languages      = "<ul>";
    $languages      .= "<li>PHP</li>";
    $languages      .= "<li>HTML</li>";
    $languages      .= "<li>CSS</li>";
    $languages      .= "<li>JavaScript</li>";
    $languages      .= "</ul>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $homePage; ?></title>
    </head>
    <body>
        <h1><?php echo $heading; ?></h1>
        <p><?php echo $brief; ?></p>
        <p><?php echo "Hello" . " " . "PHP"; ?></p>
        <p><?php echo $var1 . " " . "This Is String Concatenation" . " " . $var2; ?></p>
        <p><?php echo 100.55 . " " . 2; ?></p>
        <p><?php echo 100 . 55; ?></p>
        <h2>The Languages I Love</h2>
        <?php echo $languages ?>
    </body>
</html>

<!-- Concatenation Is Used To Concat 2 Data Togethers To Make Concatenation We Have To Use (.) -->