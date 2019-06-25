<?php
$GLOBALS["info_anabled"] = true;
$GLOBALS["bg-color"] = "100%, 100%, 100%";
$GLOBALS["tx-color"] = "0%, 0%, 0%";
$GLOBALS['counter'] = 0;

require_once("info.php");


function Button($json = ""){
    require("templates/buttons.php");
    $default = ["content"=> "placeholder", "template" =>"default", "attr" => "href='#'", "style"=> "", "script"=> ""];
    require("CompCommon.php");
    $compiler .= "<div id=\"btn{$GLOBALS['counter']}\">";
    $compiler .= "<a $attr >{$content}</a>";
    if (array_key_exists($template, $temp)) $compiler .= "<style>".$temp[$template][0].$style."</style>
                <script>".$temp[$template][1].$script."</script>";
    if(array_key_exists($template, $temp) === false && $style) $compiler .= "<style>$style</style>";
    if(array_key_exists($template, $temp) === false && $script) $compiler .= "<script>$script</script>";
    $compiler .= "</div>";
    return $compiler;          
    $GLOBALS['counter'] = $GLOBALS['counter'] + 1;
}

?>
