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
                     <input type="radio" id="storage" name="search-type">
                     <label for="storage">Storage Location</label>
                 </div>
            </div>
            <div class="returned-data">
                <div class="item-container">
                    <div class="left">
                        <h1>Hammer</h1>
                        <h2><span class="highlight">Location:</span> Side Cupboard near the end of the garage</h2>
                        <h3><span class="highlight">Position:</span> Top shelf on the left side</h3>
                        <h4>Details</h4>
                        <p>Hammer stolen off of google images, I am pretty sure it was listed on amazon at some point. The handle is made of plastic with more rubber on the end to allow it to grip better. Also the head is bent, I am not sure why they made it this way but it is really hard to hit nails with the thin side</p>
                    </div>
                    <div class="right">
                        <img src="./resources/images/uploaded/hammer.png" alt="Hammer Image">
                    </div>
                </div>
            </div>
        </main>
        <?php new Footer() ?>
    </body>
</html>