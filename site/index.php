<?php
    include_once("./resources/components/header/header.php");
    include_once("./resources/components/footer/footer.php");
    include_once("./resources/components/meta/meta.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php new Meta("Site Inventory Search", "A page that allows for searching the locations of various tools and parts", true); ?>
    </head>
    <body>
        <?php new Header("Search Page") ?>
        <main>
            <p>Body Contents</p>
        </main>
        <?php new Footer() ?>
    </body>
</html>