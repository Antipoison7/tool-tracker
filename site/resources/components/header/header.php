<?php
    class Header{
        function __construct(string $title){
            if(strlen($title)>0){
                // I have to load the <svg> in here or else it complicates the hover colour when using <img>
                $svg_in = file_get_contents("./resources/images/ui/hamburger.svg");

                echo("<header>
                    <button>
                        {$svg_in}
                    </button>
                    <h1><a href=\"./\">{$title}</a></h1>
                </header>");
            }
            else{
                echo("Title is unset");
            }
        }
    }
?>