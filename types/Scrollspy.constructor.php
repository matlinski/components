<?php

function Scrollspy($input = ""){
$compiler = "";
$base_class = "list-group";
$default = ["content"=> ['Top', 'Middle', 'Bottom'],"id_base"=>"id_placeholder", "attr" => "", "template" =>"navbar-light bg-light col-2", "style"=> "&{position: fixed; top: 50%; transform: translateY(-50%)}", "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$secondary_id = 'trigger';
$id_supply = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'q', 'w', 'e', 'r', 't', 'y', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'];
for($i = 0; $i < 5; $i++){
    $secondary_id .= $id_supply[rand(0, (count($id_supply) - 1) )];
}
$script .= '$(\'body\').scrollspy({ target: \'#'.$secondary_id.'\'})';
$compiler .= '<component id="'.$id.'">';
$compiler .= '<nav id="'.$secondary_id.'" class="'.$base_class.' '.$template.'" '.$attr.'>';
if(is_array($content)){
  foreach($content as $key => $value){
    $compiler .= '<a class="list-group-item list-group-item-action" href="#'.$id_base.$key.'">'.$value.'</a>';
  }
} else {
  $content_compiler .= 'Please set the content as an array';
  $compiler .= $content_compiler;
}
$compiler .= "</nav>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
return $compiler;
}

?>