<?php

function Alert($input = "") {
$base_class = "alert";
$default = [
                "content"   =>   "Content placeholder",
                "tag"       =>   "div",
                "attr"      =>   "",
                "template"  =>   "alert-warning fade show",
                "dismisable"=>   true,
                "style"     =>   "",
                "script"    =>   ""
            ];

foreach(Component($input, $default, $base_class) as $key => $value) {
     $$key = $value;
}

$scheme =   [
               [
                    "condition" => true,
                    "line"      => '<'.$tag.' id="'.$id.'" class="'.$base_class.
                        ' '.$template.'" '.attr_append($attr, ["role"  =>  "alert"]).'>'
               ],
               [
                    "condition" => true,
                    "line"      => $content
               ],
               [
                    "condition" => $dismisable,
                    "line"      => '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>'
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
                    "line"      => "</$tag>"
               ],
            ];
            
return Compiler($base_class, $scheme);
}

?>
