<?php
$info_disable = false;
$GLOBALS['counter'] = 0;


function info($settings){
    if(isset($settings)){
        echo "<script> console.log('The default options for this components are: ');\n
        var settings = {};\n";
        foreach ($settings as $key => $value) {
            echo "settings.".$key." = "."\"$value\";\n";
        }
        echo "console.table(settings);</script>\n";
    }
    else echo "<p>This is a function that displays options for custumising styles and effects of the components. It's sufficient if you place a require_once(\"Directory\") of components.php in your html document and call one of the functions to create the component. The function will then display the chosen component and call a JavaScript to display more options in your browsers console. To disable this function please change the value of \$info_disable to true.</p>";
}


function button($settings = ["value" => "template", "href" => "#", "size" => "medium", "style" => "default", "script" => "default"]){
    $settings["id"] = "btn" . $GLOBALS['counter'];
    info($settings);
}

// 
     
?>
