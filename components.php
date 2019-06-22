<?php
$GLOBALS["info_anabled"] = true;
$GLOBALS['counter'] = 0;

function info($settings = false){
    if($GLOBALS["info_anabled"]){
        echo "<script> console.log('The default options for this components are: ');\n
        var settings = {};\n";
        foreach ($settings as $key => $value) {
            echo "settings.".$key." = "."\"$value\";\n";
        }
        echo "console.table(settings);</script>\n";
    }
    if(!is_array($settings)) echo "<b style=\"color: red;\">This is a function that displays options for custumising styles and effects of the components. It's sufficient if you place a require_once(\"Directory\") of components.php in your html document and call one of the functions to create the component. The function will then display the chosen component and call a JavaScript to display more options in your browsers console. To disable this function please change the value of \$GLOBALS[\"info_anabled\"] to false.</b>";
}


function button($s = []){
    $settings["value"] = "template";
    $settings["href"] = "#";
    $settings["size"] = "medium";
    $settings["style"] = "default";
    $settings["script"] = "default";
    $settings["id"] = "btn" . $GLOBALS['counter'];
    foreach($s as $key => $value) $settings[$key] = $value;
    info($settings);
    $GLOBALS['counter'] = $GLOBALS['counter'] + 1;
}
?>
