<?php
function Card($input = ""){
$compiler = "";
$base_class = "card";
$default = [
                "content"   =>  "<h5>Title placeholder</h5><p>Body placeholder</p><button class='btn btn-primary'>Click here</button>",
                "image"     =>  '<img src=\'https://source.unsplash.com/'.rand(590,610).'x250/\' alt=\'...\'>',
                "template"  =>  "",
                "attr"      =>  "",
                "style"     =>  "&>img{width: 100%; border-top-left-radius: calc(.25rem - 1px); border-top-right-radius: calc(.25rem - 1px);}",
                "script"    =>  ""
            ];

foreach(Component($input, $default, $base_class) as $key => $value){
    $$key = $value;
}

$compiler .= '<div id="'.$id.'" class="'.$base_class.' '.$template.'";">';
$compiler .= $image;
$compiler .= '<div class="card-body">'.$content.'</div>';

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
