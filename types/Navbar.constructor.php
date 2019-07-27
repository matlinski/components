<?php

function Navbar($input = "") {
$base_class = "navbar";

$default = [
            "content"   =>  '<h1 class=\'navbar-brand\'>'.
                                'Content placeholder'.
                            '</h1>',
            "attr"      =>  "",
            "template"  =>  "navbar-light bg-light",
            "style"     =>  "",
            "script"    =>  ""
        ];

        foreach(Component($input, $default, $base_class) as $key => $value) {
            $$key = $value;
       }
       
       $scheme =   [
                      [
                           "condition" => true,
                           "line"      => '<nav id="'.$id.'" class="'.$base_class.' '.$template.
                                                '" '.attr_append($attr).'>'
                      ],
                      [
                           "condition" => true,
                           "line"      => $content
                      ],
                      [
                           "condition" => $script !== false,
                           "line"      => "<script>$script</script>"
                      ],
                      [
                           "condition" => $style !== false,
                           "line"      => "<style>$style</style>"
                      ],
                      [
                           "condition" => true,
                           "line"      => "</nav>"
                      ],
                   ];
                   
       return Compiler($base_class, $scheme);
}

?>