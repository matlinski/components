<?php

function Input($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "input-group";
$default = ["content"=> "Content value","tag"=>"input", "attr" => "", "template" =>"form-control", "label"=>'<span id=\'basic-addon\'> @ </span>', "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$compiler .= '<component id="'.$id.'">';
$compiler .= '<div class="'.$base_class.'">';
$base_attributes = ["type"=>"text", "placeholder"=>"example placeholder", "aria-label"=>"example", "aria-describedby"=>"basic-addon"];
if($label){
    if(preg_match("/<\/span>/", $label)){
        $style .= '#'.$id.'>.'.$base_class.'>div{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: .375rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }';
    }
    if(is_array($label)){
        if($label[1]=== "append"){
           if($tag === "input") $base_attributes["value"] = $content;
           $compiler .= '<'.$tag.' class="form-control" '.attr_append($attr, $base_attributes).'>';  
           if($tag !== "input") $compiler .= $content;
        }
        $compiler .= '<div class="input-group-'.$label[1].'">';
        $compiler .= $label[0];
    }
    else {
        $compiler .= '<div class="input-group-prepend">';
        $compiler .= $label;
    } 
    $compiler .= '</div>';
    if($tag === "input") $base_attributes["value"] = $content;
    $compiler .= '<'.$tag.' class="form-control" '.attr_append($attr, $base_attributes).'>';
    if($tag !== "input") $compiler .= $content;
} 
else{
    if($tag === "input") $base_attributes["value"] = $content;
    $compiler .= '<'.$tag.' class="form-control" '.attr_append($attr, $base_attributes).'>';
    if($tag !== "input") $compiler .= $content;
}

if($tag !== "input") $compiler .= "</$tag>";
$compiler .= "</div>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>