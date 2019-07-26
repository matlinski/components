<?php

function Badge($input = "") {
$base_class = "badge";

$default = [
                "content"   =>  "Content placeholder",
                "tag"       =>  "span",
                "attr"      =>  "",
                "template"  =>  "badge-primary",
                "style"     =>  "",
                "script"    =>  ""
            ];
return Compiler($base_class, Component($input, $default, $base_class));
}

?>
