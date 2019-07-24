<?php

function Media($input = ""){
$compiler = "";
$base_class = "media";
$default = ["content"=>"<h5>Content placeholder</h5><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus perspiciatis maxime porro. Est ab cum, porro ullam dicta expedita! Quis a, vero nemo dolore assumenda vitae impedit doloremque reiciendis.</p><button class='btn btn-primary'>Click here</button>", "image"=>'<img src=\'https://picsum.photos/'.rand(190,210).'/200\' class=\'card-img-top\' alt=\'alt placeholder\'>', "template" =>"", "reverse"=>false, "attr" => "", "style"=> "", "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$style .= '#'.$id.'>.'.$base_class.'{display: flex; flex-direction: row} #'.$id.'>.'.$base_class.'>img{flex-basis: 150px; margin: 1.25rem 0 0 1.25rem} #'.$id.'>.'.$base_class.'>.card-body{flex-basis: 100%}';
$compiler .= '<div id="'.$id.'" class="'.$base_class.' '.$template.'">';
if(!$reverse)$compiler .= $image;
$compiler .= '<div class="card-body">'.$content.'</div>';
if($reverse)$compiler .= $image;
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</div>";
return $compiler;
}

?>