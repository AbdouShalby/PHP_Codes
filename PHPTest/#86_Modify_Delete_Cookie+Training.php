<?php
    setcookie("Background", "", time() - 3600, "/"); // This Code To Remove Cookie
    $mainColor = "#FFF";  // Main Color
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mainColor = $_POST["color"]; // The Color From The Form
        setcookie("Background", $mainColor, time() + 3600, "/");
    }
    if (isset($_COOKIE["Background"])) {
        $body = $_COOKIE["Background"];
    } else {
        $body = $mainColor;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Modify Cookie</title>
    </head>
    <body style="background-color: <?php echo $body; ?>">
        <form action="%2386_Modify_Delete_Cookie+Training.php" method="POST">
            <input type="color" name="color">
            <input type="submit" value="Choose">
        </form>
    </body>
</html>