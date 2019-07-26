<?php

function Alert($input = "") {
$base_class = "alert";
$default = [
                "content"   =>   "Content placeholder",
                "tag"       =>   "div",
                "attr"      =>   "",
                "template"  =>   "alert-warning fade show",
                "dismisable"=>   true,
                "style"     =>   "",
                "script"    =>   ""
            ];
    return Compiler($base_class, Component($input, $default, $base_class));
}

?>