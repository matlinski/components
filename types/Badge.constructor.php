<?php

function Badge($input = "") {
$base_class = "badge";

$default = [
                "content"   =>  "Content placeholder",
                "tag"       =>  "span",
                "attr"      =>  "",
                "template"  =>  "badge-primary",
                "style"     =>  "",
                "script"    =>  ""
            ];
foreach(Component($input, $default, $base_class) as $key => $value) {
    $$key = $value;
}
           
$scheme =   [
                [
                    "condition" => $tag === "span",
                    "line"      => '<span id="'.$id.'" class="'.
                                    $base_class.' '.$template.'" '.
                                    attr_append($attr).'>'.$content,
                ],
                [
                    "condition" => $tag === "span" && $script,
                    "line"      => "<script>$script</script>"
                ],
                [
                    "condition" => $tag === "span" && $style,
                    "line"      => "<style>$style</style>"
                ],
                [
                    "condition" => $tag === "span",
                    "line"      => '</span>'
                ],
                [
                    "condition" => ($tag === "a"),
                    "line"      => '<a id="'.$id.'" '.attr_append($attr, ["href"=>"#"]).
                    ' class="'.$base_class.' '.$template.'">'.$content
                ],
                [
                    "condition" => $tag === "a" && $script,
                    "line"      => "<script>$script</script>"
                ],
                [
                    "condition" => $tag === "a" && $style,
                    "line"      => "<style>$style</style>"
                ],
                [
                    "condition" => $tag === "a",
                    "line"      => '</a>'
                ],
            ];
return Compiler($base_class, $scheme);
}

?>
