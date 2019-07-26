<?php

function Jumbotron($input = "") {
$base_class = "jumbotron";

$default = [
                "header"    =>  '<h1 class=\'display-4\'>'.
                                    'Header placeholder'.
                                '</h1></br>',

                "body"      =>  '<p class=\'lead\'>'.
                                    'This is a body placeholder.'.
                                '</p>'.
                                '<button class=\'btn btn-primary\'>'.
                                    'Take action!'.
                                '</button>',

                "attr"      =>  "",
                "template"  =>  "jumbotron-fluid",
                "style"     =>  '&{'.
                                    'background-image: url(\'https://source.unsplash.com/featured/?dark\');'.
                                    ' background-size: cover;'.
                                    ' color: white'.
                                '}',
                "script"    =>  ""
            ];
return Compiler($base_class, Component($input, $default, $base_class));

}

?>