<?php
function Button($input = "") {
$base_class = "btn";

$default = [
                "content"   =>  "Content placeholder",
                "tag"       =>  "button",
                "attr"      =>  "",
                "template"  =>  "btn-primary",
                "tooltip"   =>  false,
                "dropdown"  =>  false,
                "popover"   =>  false,
                "collapse"  =>  false,
                "style"     =>  "",
                "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));
}

?>