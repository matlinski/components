<?php

function Scrollspy($input = "") {
$base_class = "scrollspy";

$default = [
              "content"   => 
                    [
                      'Top',
                      'Middle',
                      'Bottom'
                    ],
              "reference_id"   =>  "id_placeholder",
              "attr"      =>  "",
              "template"  =>  "navbar-light bg-light col-2",
              "style"     =>  "&{".
                                  "position: fixed;".
                                  "top: 50%;".
                                  "right: 0%;".
                                  "z-index: 999;".
                                  "transform: translateY(-50%)".
                              "}",
              "script"    =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));

}

?>