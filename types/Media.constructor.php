<?php

function Media($input = "") {
$base_class = "media";

$default = [
                "content"   =>  "<h5>".
                                    "Content placeholder".
                                "</h5>".
                                "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.".
                                    " Nesciunt repellendus perspiciatis maxime porro. Est ab cum,".
                                    " porro ullam dicta expedita! Quis a, vero nemo dolore assumenda".
                                    " vitae impedit doloremque reiciendis.".
                                "</p>".
                                "<button class='btn btn-primary'>".
                                    "Click here".
                                "</button>",

                "image"     =>  '<img src=\'https://picsum.photos/'.rand(190,210).
                                    '/200\' class=\'card-img-top col-2\' alt=\'alt placeholder\'>',
                                    
                "reverse"   =>  false,
                "attr"      =>  "",
                "template"  =>  "",
                "style"     =>  "",
                "script"    =>  ""
            ];
return Compiler($base_class, Component($input, $default, $base_class));

}

?>