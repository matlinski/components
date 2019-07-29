<?php 
function compiler($base_class, $scheme = null){

    $compiler = "";
    
        foreach($scheme as $value){
            if ($value["condition"] === true) {
                    $compiler .= $value["line"];
            }
        }


    // case "toast":
    //     $script .= 
    //         '$(document).ready(function() {
    //             $(\'.toast\').toast(\'show\');
    //         });';

    //     $base_attributes =  [
    //                         "data-autohide" =>  "false",
    //                         "role"          =>  "alert",
    //                         "aria-live"     =>  "assertive",
    //                         "aria-atomic"   =>  "true"
    //                         ];

    //     $compiler .= 
    //     '<div id="'.$id.'" class="'.$base_class.' '.
    //         $template.'" '.attr_append($attr, $base_attributes).'>';
        
    //     $compiler .= '<div class="toast-header">';
    //     $compiler .= $header;

    //     $compiler .= 
    //     '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>';

    //     $compiler .= '</div>';
    //     $compiler .= '<div class="toast-body">';
    //     $compiler .= $body;
    //     $compiler .= '</div>';

    //     if ($script) {
    //         $compiler .= "<script>$script</script>";
    //     } 

    //     if ($style) {
    //         $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= '</div>';
    // break;

    // }
    return $compiler;
}
?>