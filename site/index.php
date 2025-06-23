<?php
    include_once("./resources/components/header/header.php");
    include_once("./resources/components/footer/footer.php");
    include_once("./resources/components/meta/meta.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php new Meta("Site Inventory Search", "A page that allows for searching the locations of various tools and parts", true); ?>
        <link rel="stylesheet" href="./resources/styles/pages/index.css">
    </head>
    <body>
        <?php new Header("Search Page") ?>
        <main>
            <div class="input-box">
                <div class="search-box">
                    <label for="search-bar">Search Item</label>
                    <input type="text" name="search-bar" id="search-bar">
                </div>
    
                <!-- Radio button for item selection -->
                 <div class="radio-box">
                     <input type="radio" id="name" name="search-type" checked="checked">
                     <label for="name">Item Name</label>
                     <input type="radio" id="category" name="search-type">
                     <label for="category">Item Category</label>
                     <input type="radio" id="group" name="search-type">
                     <label for="group">Item Group</label>
                 </div>
            </div>
        </main>
        <?php new Footer() ?>
    </body>
</html>