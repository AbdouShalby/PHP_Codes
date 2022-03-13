<?php
    $homePage       = "PHP - Variables";
    $copyOfHomePage = $homePage;
    $heading        = "Welcome To Variables";
    $brief          = "This Lesson Talk About Variables And How To Use It";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $homePage; ?></title>
    </head>
    <body>
        <?php echo "
            <h1>$heading</h1>
            <p>$brief</p>
        "; ?>
    </body>
</html>

<!-- Variables Is Box Of Code We Use It When We Want It's Should Be Start With Dollar Sign ($) To Tell PHP Compiler That's Variable Then Variable Name Then Assignment Operator To Put The Value For It In Double Quotation Then Simi Column And When We Call It We Should Type Dollar Sign And Variable Name If We Put Variable Name Inside Single Quotation That Will Print Variable Name Like Text, Variable Name Can't Be Start With (Number) And Can Use Space In It You Can Start With (_, Character) Variable Can Equal Variable -->