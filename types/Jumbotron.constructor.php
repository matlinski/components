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
            foreach(Component($input, $default, $base_class) as $key => $value) {
                $$key = $value;
           }
           
           $scheme =   [
                          [
                               "condition" => true,
                               "line"      => '<div id="'.$id.'" class="'.$base_class.
                                                    ' '.$template.'" '.attr_append($attr).'>'
                          ],
                          [
                               "condition" => true,
                               "line"      => '<div class="container">'
                          ],
                          [
                               "condition" => true,
                               "line"      => $header
                          ],
                          [
                               "condition" => true,
                               "line"      => $body
                          ],
                          [
                               "condition" => true,
                               "line"      => "</div>"
                          ],
                          [
                               "condition" => $script !== false,
                               "line"      => "<script>$script</script>"
                          ],
                          [
                               "condition" => $style !== false,
                               "line"      => "<style>$style</style>"
                          ],
                          [
                               "condition" => true,
                               "line"      => "</div>"
                          ],
                       ];
                       
           return Compiler($base_class, $scheme);
}

?>