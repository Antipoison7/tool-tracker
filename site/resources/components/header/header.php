<?php
    class Header{
        function __construct(string $title){
            if(strlen($title)>0){
                // I have to load the <svg> in here or else it complicates the hover colour when using <img>
                $open_svg_in = file_get_contents("./resources/images/ui/hamburger.svg");
                $close_svg_in = file_get_contents("./resources/images/ui/close.svg");

                // https://www.youtube.com/watch?v=8eFeIFKAKHw - Navbar
                echo("<header>
                    <nav>
                        <input type=\"checkbox\" id=\"sidebar-active\">
                        <label for=\"sidebar-active\" class=\"open-sidebar-button\">
                            {$open_svg_in}
                        </label>

                        <label id=\"overlay\" for=\"sidebar-active\"></label>
                        <div class=\"links-container\">
                            <label for=\"sidebar-active\" class=\"close-sidebar-button\">
                                {$close_svg_in}
                            </label>

                            <a href=\"./\">Search Page</a>
                            <a href=\"./new.php\">Add Items</a>
                        </div>
                    </nav>

                    <h1><a href=\"./\">{$title}</a></h1>
                </header>");
            }
            else{
                echo("Title is unset");
            }
        }
    }
?>