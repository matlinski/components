<?php

function Pagination($input = "") {
$base_class = "pagination";

$default = [
                "links"     => 
                    [
                        '#id1',
                        '#id2',
                        '#id3'
                    ],
                "active"    =>  2,
                "interface" =>  
                    [
                        "previous",
                        "next"
                    ],
                "attr"      => "",
                "template"  =>"justify-links-left",
                "style"     => "",
                "script"    => ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));
}

?>