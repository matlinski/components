<?php

function Navbar($input = "") {
$base_class = "navbar";

$default = [
            "content"   =>  '<h1 class=\'navbar-brand\'>'.
                                'Content placeholder'.
                            '</h1>',
            "attr"      =>  "",
            "template"  =>  "navbar-light bg-light",
            "style"     =>  "",
            "script"    =>  ""
        ];

return Compiler($base_class, Component($input, $default, $base_class));
}

?>