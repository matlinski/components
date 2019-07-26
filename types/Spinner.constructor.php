<?php

function Spinner($input = "") {
$base_class = "spinner";

$default = [
                "radius"    =>  "2rem",
                "template"  =>  "spinner-border",
                "attr"      =>  "",
                "style"     =>  "",
                "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));

}

?>