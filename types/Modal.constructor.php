<?php

function Modal($input = "") {
$base_class = "modal";

$default = [
            "header"    =>  '<h5 class=\'modal-title\'>'.
                                'Header placeholder'.
                            '</h5>',

            "body"      =>  '<p>'.
                                'Body placeholder'.
                            '</p>',

            "footer"    =>  '<button class=\'btn btn-primary\'>'.
                                'Take action!'.
                            '</button>',

            "trigger_id"=>  "myID",
            "attr"      =>  '',
            "template"  =>  "fade",
            "style"     =>  "",
            "script"    =>  ""
          ];

return Compiler($base_class, Component($input, $default, $base_class));
}

?>