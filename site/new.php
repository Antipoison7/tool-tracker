<?php
    include_once("./resources/components/header/header.php");
    include_once("./resources/components/footer/footer.php");
    include_once("./resources/components/meta/meta.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php new Meta("Add New Items", "Allows a user to add new items to the database lookup", true); ?>
    </head>
    <body>
        <?php new Header("New Items") ?>
        <main>
            <p>Body Contents</p>
        </main>
        <?php new Footer() ?>
    </body>
</html>