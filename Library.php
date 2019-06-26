<?php
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"templates/buttons.php\">";
echo "<script type=\"text/javascript\" src=\"behaviour/buttons.php\"></script>";
require_once("info.php");
require_once("Component.php");

function Button($json = ""){
                        #USER INPUT ABOVE#
    $compiler = "";
    $base_class = "btn";
    $default = ["content"=> "placeholder", "class" =>"default", "attr" => "href='#'", "style"=> "", "script"=> ""];
                        #PRESETS ABOVE#
    foreach(Component($json, $default, $base_class) as $key => $value) $$key = $value;
    $compiler .= "<div class=\"btn $class\">";
    if($style) $compiler .= "<style>$style</style>";
    $compiler .= "<a class=\"btn_link $user_class\" $attr >{$content}</a>";
    if($script) $compiler .= "<script>$script</script>";
    $compiler .= "</div>";
                        #COMPILATION ABOVE#
    return $compiler;          

    }

?>