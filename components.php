<?php
$GLOBALS["info_anabled"] = true;
$GLOBALS["bg-color"] = "100%, 100%, 100%";
$GLOBALS["tx-color"] = "0%, 0%, 0%";
$GLOBALS['counter'] = 0;

require_once("info.php");
require_once("templates/buttons.php");
require_once("CompCommon.php");

function Button($json = ""){
    $compiler = "";
    $default = ["content"=> "placeholder", "template" =>"default", "attr" => "href='#'", "style"=> "", "script"=> ""];
    foreach(Component($json, $default) as $key => $value){
        $$key = $value;
    }
    $compiler .= "<div id=\"btn{$GLOBALS['counter']}\">";
    $compiler .= "<a $attr >{$content}</a>";
    if (array_key_exists($template, temp("buttons"))) $compiler .= "<style>".temp("buttons")[$template][0].$style."</style>
                <script>".temp("buttons")[$template][1].$script."</script>";
    if(array_key_exists($template, temp("buttons")) === false && $style) $compiler .= "<style>$style</style>";
    if(array_key_exists($template, temp("buttons")) === false && $script) $compiler .= "<script>$script</script>";
    $compiler .= "</div>";
    $GLOBALS['counter']++;
    return $compiler;          

    }

?>
