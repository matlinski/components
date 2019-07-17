<?php

function Breadcrumb($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "breadcrumb";
$default = ["content"=> ['<a href=\'home.html\'>home</a>', '<a href=\'library.html\'>library</a>', 'data'], "separator"=>">", "attr" => "", "template" =>"justify-content-left", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$base_attributes = [];
if($separator){
    $style .= '
        .breadcrumb-item + .breadcrumb-item::before{
            content: "'.$separator.'";
        }
    ';
}
$compiler .= '<component id="'.$id.'">';
$compiler .= '<ul class="'.$base_class.' '.$template.'" '.$attr.'>';
$content_compiler = "";
if(is_array($content)){
    $i = 1;
    foreach($content as $value){
        if($i === (count($content)) )$content_compiler .= '<li class="breadcrumb-item active" aria-current="page">'.$value.'</li>';
        else $content_compiler .= '<li class="breadcrumb-item">'.$value.'</li>';
        $i++;
    }
    $compiler .= $content_compiler;
} else {
    $content_compiler .= 'Please set the content as an array';
    $compiler .= $content_compiler;
}
    #COMPILATION BEGINS#
$compiler .= "</ul>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>