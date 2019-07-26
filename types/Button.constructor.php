<?php
function Button($input = "") {
$base_class = "btn";

$default = [
                "content"   =>  "Content placeholder",
                "tag"       =>  "button",
                "tooltip"   =>  false,
                "dropdown"  =>  false,
                "popover"   =>  false,
                "collapse"  =>  false,
                "attr"      =>  "",
                "template"  =>  "btn-primary",
                "style"     =>  "",
                "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));
}

?>