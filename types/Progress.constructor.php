<?php

function Progress($input = "") {
$base_class = "progress";

$default = [
                "progress"  =>  25,
                "min"       =>  0,
                "max"       =>  100,
                "template"  =>  "bg-success",
                "attr"      =>  "",
                "style"     =>  "",
                "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));
           
}

?>
