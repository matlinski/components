<?php

function Media($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "media";
$default = ["content"=>"<h5>Content placeholder</h5><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus perspiciatis maxime porro. Est ab cum, porro ullam dicta expedita! Quis a, vero nemo dolore assumenda vitae impedit doloremque reiciendis.</p><button class='btn btn-primary'>Click here</button>", "image"=>'<img src=\'https://picsum.photos/200/200\' class=\'card-img-top\' alt=\'alt placeholder\'>', "template" =>"", "attr" => "", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$style .= '#'.$id.'>.'.$base_class.'{display: flex; flex-direction: row} #'.$id.'>.'.$base_class.'>img{flex-basis: 150px; margin: 1.25rem 0 0 1.25rem} #'.$id.'>.'.$base_class.'>.card-body{flex-basis: 100%}';
$compiler .= '<component id="'.$id.'">';
$compiler .= '<div class="'.$base_class.' '.$template.'">';
    #COMPILATION BEGINS#               
$compiler .= $image;
$compiler .= '<div class="card-body">'.$content.'</div>';
// $style .= $id.'>.card>.card-body'
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</div>";
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>