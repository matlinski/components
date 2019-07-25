<?php
function Carousel($input = ""){
$compiler = "";
$base_class = "carousel";
$default = [
                "content"       => 
                    [
                    '<div><p class=\'display-4\'>First caption</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est ipsam, deleniti quo quos illo voluptatibus consequuntur magni quae eaque deserunt neque explicabo consectetur minima autem placeat suscipit odit inventore!</p></div><img src=\'https://source.unsplash.com/2501x300?moon\' alt=\'...\'>',
                    '<div><p class=\'display-4\'>Second caption</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est ipsam, deleniti quo quos illo voluptatibus consequuntur magni quae eaque deserunt neque explicabo consectetur minima autem placeat suscipit odit inventore!</p></div><img src=\'https://source.unsplash.com/2500x300?moon\' alt=\'...\'>',
                    '<div><p class=\'display-4\'>Third caption</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est ipsam, deleniti quo quos illo voluptatibus consequuntur magni quae eaque deserunt neque explicabo consectetur minima autem placeat suscipit odit inventore!</p></div><img src=\'https://source.unsplash.com/2499x300?moon\' alt=\'...\'>'
                    ],
                'active'        =>  2,
                "caption"       =>  true,
                "controls"      =>  false,
                "indicators"    =>  false,
                "attr"          =>  "",
                "template"      =>  "slide",
                'interval'      =>  5000,
                "style"         =>  '&>.carousel-inner>.carousel-item>:not(img){position: absolute;right: 15%;bottom: 20px;left: 15%;z-index: 10;padding-top: 20px;padding-bottom: 20px;color: #fff;text-align: center; }',
                "script"        =>  ""
            ];

foreach(Component($input, $default, $base_class) as $key => $value){
    $$key = $value;
}

$base_attributes =  [
                        "data-ride"=>"carousel"
                    ];

$compiler .= '<div id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$compiler .= '<div class="carousel-inner">';

if(is_int($interval)){
    $set_interval = 'data-interval="'.$interval.'"';
}

if(is_array($content)){

    if($indicators){
        $compiler .= '<ol class="carousel-indicators">';

        foreach($content as $key => $value){

            if(($key+1) === $active ){
                $compiler .= '<li data-target="#'.$id.'" data-slide-to="'.$key.'" class="active"></li>';
            }
            else{
                $compiler .= '<li data-target="#'.$id.'" data-slide-to="'.$key.'"></li>';
            } 
        }
        $compiler .= '</ol>';
    }
    $content_compiler = '';
    foreach($content as $key => $value){

        if(($key+1) === $active ){
            $content_compiler .= '<div class="carousel-item active" '.$set_interval.'>';
        }
        else{
            $content_compiler .= '<div class="carousel-item" '.$set_interval.'>';
        } 
        $content_compiler .= $value;
        $content_compiler .= '</div>';
    }
    $compiler .= $content_compiler;

    if($controls){
        $compiler .= '<a class="carousel-control-prev" href="#'.$id.'" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#'.$id.'" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>';
    }
} else {
    $content_compiler .= 'Please set the content as an array';
    $compiler .= $content_compiler;
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