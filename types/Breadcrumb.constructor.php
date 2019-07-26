<?php

function Breadcrumb($input = "") {
$base_class = "breadcrumb";

$default = [
                "content"   => 
                    [
                    '<a href=\'home.html\'>home</a>',
                    '<a href=\'library.html\'>library</a>',
                    'data'
                    ],
                "separator" =>  ">",
                "attr"      =>  "",
                "template"  =>  "justify-content-left",
                "style"     =>  "",
                "script"    =>  ""
            ];
            
return Compiler($base_class, Component($input, $default, $base_class));
}

?>