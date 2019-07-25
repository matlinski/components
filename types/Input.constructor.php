<?php

function Input($input = ""){
$compiler = "";
$base_class = "form-group";
$default = [
                "content"   =>  "Value placeholder",
                "tag"       =>  "input",
                "attr"      =>  "",
                "template"  =>  "form-control",
                "label"     =>  "Label placeholder",
                "sticker"   =>  '<span id=\'basic-addon\'> @ </span>',
                "style"     =>  "",
                "script"    =>  ""
            ];

foreach(Component($input, $default, $base_class) as $key => $value){
    $$key = $value;
}

$compiler .= '<div id="'.$id.'" style="width:auto" class="'.$base_class.' '.$template.'">';

if($label){
    if(is_array($label)) $compiler .= '<label for="'.$id.'" class="'.$label[1].'">'.$label[0].'</label>';
    else $compiler .= '<label for="'.$id.'">'.$label.'</label>';
}
$compiler .= '<div class="input-group ">';
$base_attributes =  [
                        "type"=>"text",
                        "placeholder"=>"example placeholder",
                        "aria-label"=>"example",
                        "aria-describedby"=>"basic-addon"
                    ];

if($sticker){
    if(preg_match("/<\/span>/", $sticker)){
        $style .= '#'.$id.'.'.$base_class.'>.input-group>div{
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
    if(is_array($sticker)){
        if($sticker[1]=== "append"){
           if($tag === "input"){
               $base_attributes["value"] = $content;
           } 
           $compiler .= '<'.$tag.' class="form-control" '.attr_append($attr, $base_attributes).'>';  
           if($tag !== "input"){
               $compiler .= $content;
           } 
        }
        $compiler .= '<div class="input-group-'.$sticker[1].'">';
        $compiler .= $sticker[0];
    }
    else {
        $compiler .= '<div class="input-group-prepend">';
        $compiler .= $sticker;
    } 
    $compiler .= '</div>';
    if($tag === "input"){
        $base_attributes["value"] = $content;
    } 
    $compiler .= '<'.$tag.' class="form-control" '.attr_append($attr, $base_attributes).'>';

    if($tag !== "input"){
        $compiler .= $content;
    } 
} 
else{
    if($tag === "input"){
        $base_attributes["value"] = $content;
    } 
    $compiler .= '<'.$tag.' class="form-control" '.attr_append($attr, $base_attributes).'>';
    if($tag !== "input"){
        $compiler .= $content;
    } 
}

if($tag !== "input"){
    $compiler .= "</$tag>";
} 
$compiler .= "</div>";
if($script){
    $compiler .= "<script>$script</script>";
} 
if($style){
    $compiler .= "<style>$style</style>";
} 
$compiler .= "</div>";
return $compiler;
}

?>