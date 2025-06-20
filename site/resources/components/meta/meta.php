<?php
    class Meta{
        function __construct(string $title, string $description, bool $styles){
            echo("
            <meta charset=\"UTF-8\">
            <meta name=\"description\" content=\"{$description}\">
            <meta name\"keywords\" content=\"Tools, Tool Stocktake\">
            <meta name=\"author\" content=\"Connor - Antipoison\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            <link rel=\"icon\" href=\"./resources/images/favicon/favicon.png\" type=\"image/x-icon\">

            <title>{$title}</title>
            
            <link rel=\"stylesheet\" href=\"./resources/styles/global/global.css\">");

            if($styles){
                echo("
                <link rel=\"stylesheet\" href=\"./resources/styles/components/header/header.css\">
                <link rel=\"stylesheet\" href=\"./resources/styles/components/footer/footer.css\">
                ");
            }
        }
    }
?>