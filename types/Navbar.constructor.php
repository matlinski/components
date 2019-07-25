<?php

function Navbar($input = ""){
$compiler = "";
$base_class = "navbar";
$default = [
            "content"   =>  '<h1 class=\'navbar-brand\'>Content placeholder</h1>',
            "attr"      =>  "",
            "template"  =>  "navbar-light bg-light",
            "style"     =>  "",
            "script"    =>  ""
        ];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$base_attributes =[];
$compiler .= '<nav id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$compiler .= $content;
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</nav>";
return $compiler;
}

?>