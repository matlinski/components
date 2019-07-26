<?php

function Navs($input = "") {
$base_class = "nav";

$default = [
                "content"   => 
                    [
                        '<a href=\'home.html\'>'.
                            'home'.
                        '</a>',

                        '<a href=\'about.html\'>'.
                            'About us'.
                        '</a>',

                        '<a href=\'contact.html\'>'.
                            'Contact'.
                        '</a>'
                    ],
                'active'    =>  2,
                'disabled'  =>  1,
                "attr"      =>  "",
                "template"  =>  "nav-tabs",
                "style"     =>  "",
                "script"    =>  ""
            ];
return Compiler($base_class, Component($input, $default, $base_class));
}

?>