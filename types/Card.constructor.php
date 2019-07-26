<?php
function Card($input = "") {
$base_class = "card";

$default = [
                "content"   =>  "<h5>Title placeholder</h5>".
                                "<p>Body placeholder</p>".
                                "<button class='btn btn-primary'>Click here</button>",

                "image"     =>  '<img src=\'https://source.unsplash.com/'.
                                    rand(590,610).'x350/\' alt=\'...\'>',
                
                "attr"      =>  "",                   
                "template"  =>  "col-3",
                "style"     =>  "&>img{".
                                    "width: 100%;".
                                    "border-top-left-radius: calc(.25rem - 1px);".
                                    "border-top-right-radius: calc(.25rem - 1px);".
                                "}",
                "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));
}

?>
