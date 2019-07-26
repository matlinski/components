<?php

function Spinner($input = "") {
$base_class = "spinner";

$default = [
                "radius"    =>  "2rem",
                "attr"      =>  "",
                "template"  =>  "spinner-border",
                "style"     =>  "",
                "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));

}

?>