<?php

function Input($input = "") {
$base_class = "form-group";

$default = [
                "content"   =>  "Value placeholder",
                "tag"       =>  "input",
                "attr"      =>  "",
                "template"  =>  "form-control",
                "label"     =>  "Label placeholder",
                "sticker"   =>  '<span id=\'basic-addon\'> @ </span>',
                "style"     =>  "",
                "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));

}

?>