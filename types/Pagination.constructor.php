<?php

function Pagination($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "pagination";
$default = ["content"=> ['<a class="page-link" href="#">1</a>', '<a class="page-link" href="#">2</a>', '<a class="page-link" href="#">3</a>'], "attr" => "", "template" =>"justify-content-left", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$base_attributes = [];
$style .= '#'.$id.'>.'.$base_class.'>.page-item>*{
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}';

$compiler .= '<component id="'.$id.'">';
$compiler .= '<ul class="'.$base_class.' '.$template.'" '.$attr.'>';
$content_compiler = "";
if(is_array($content)){
    foreach($content as $value){
        $content_compiler .= '<li class="page-item">'.$value.'</li>';
    }
    $content = $content_compiler;
} else {
    $content_compiler .= '<li class="page-item">'.$content.'</li>';
    $content = $content_compiler;
}
$compiler .= $content;
    #COMPILATION BEGINS#
$compiler .= "</ul>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>