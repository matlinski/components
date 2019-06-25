<?php
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"templates/buttons.php\">";
$GLOBALS["info_anabled"] = true;

require_once("info.php");
require_once("CompCommon.php");

function Button($json = ""){
    $compiler = "";
    $default = ["content"=> "placeholder", "class" =>"default", "attr" => "href='#'", "style"=> "", "script"=> ""];
    foreach(Component($json, $default) as $key => $value){
        $$key = $value;
    }
    $compiler .= "<div class=\"btn $class\">";
    $compiler .= "<a $attr >{$content}</a>";
    $compiler .= "</div>";
    return $compiler;          

    }

?>
