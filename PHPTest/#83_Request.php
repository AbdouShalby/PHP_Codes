<form action="%2383_Request.php" method="POST">
    <input type="text" name="username">
    <input type="submit" value="send">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_REQUEST["username"];
} else {
    echo "You Cant Browse This Page Directly & You Cant Process Data By GET";
}
?>