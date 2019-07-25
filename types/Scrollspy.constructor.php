<?php

function Scrollspy($input = ""){
$compiler = "";
$base_class = "list-group";

$default = [
              "content"   => 
                    [
                      'Top',
                      'Middle',
                      'Bottom'
                    ],
              "id_base"   =>  "id_placeholder",
              "attr"      =>  "",
              "template"  =>  "navbar-light bg-light col-2",
              "style"     =>  "&{position: fixed; top: 50%; transform: translateY(-50%)}",
              "script"    =>  ""
            ];

foreach(Component($input, $default, $base_class) as $key => $value){
    $$key = $value;
}

$script .= '$(\'body\').scrollspy({ target: \'#'.$id.'\'})';
$base_attributes = [];
$compiler .= '<nav id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';

if(is_array($content)){

  foreach($content as $key => $value){
    $compiler .= '<a class="list-group-item list-group-item-action" href="#'.$id_base.$key.'">'.$value.'</a>';
  }
  
} else  {
  $content_compiler .= 'Please set the content as an array';
  $compiler .= $content_compiler;
}

if($script){
    $compiler .= "<script>$script</script>";
} 

if($style){
    $compiler .= "<style>$style</style>";
} 
$compiler .= "</nav>";
return $compiler;
}

?>