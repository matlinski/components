<?php

function Toast($input = "") {
$base_class = "toast";

$default = [
              "header"    =>  '<img src=\'https://picsum.photos/20/20\''.
                              ' class=\'rounded mr-2\' alt=\'Alt placeholder\'>'.
                              '<strong class=\'mr-auto\'>'.
                                  'Title example'.
                              '</strong>'.
                              '<small>'.
                                '11 mins ago'.
                              '</small>',

              "body"      =>  'Body placeholder',
              "attr"      =>  "",
              "template"  =>  "",
              "style"     =>  "",
              "script"    =>  ""
          ];

return Compiler($base_class, Component($input, $default, $base_class));

}

?>
