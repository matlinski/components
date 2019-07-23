<?php

function Card($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "card";
$default = ["content"=>"<h5>Title placeholder</h5><p>Body placeholder</p><button class='btn btn-primary'>Click here</button>", "image"=>"<img src='https://source.unsplash.com/".rand(590,610)."x250/' alt='...'>", "global"=>"col-4", "template" =>"", "attr" => "", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<component id="'.$id.'" class="d-inline-flex '.$global.'">';
$compiler .= '<div class="'.$base_class.' '.$template.'";">';
    #COMPILATION BEGINS#               
$compiler .= $image;
$compiler .= '<div class="card-body">'.$content.'</div>';
// $style .= $id.'>.card>.card-body'
$style .= '#'.$id.'>.'.$base_class.'>img{
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
}';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</div>";
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>
<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->