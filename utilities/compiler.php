<?php 
function compiler($base_class, $scheme = null){

    $compiler = "";
    
        foreach($scheme as $value){
            if ($value["condition"] === true) {
                    $compiler .= $value["line"];
            }
        }

    

    // case "nav":
    //     $base_attributes = [];
    //     $compiler .= 
    //         '<ul id="'.$id.'" class="'.$base_class.' '.$template.
    //             '" '.attr_append($attr, $base_attributes).'>';
    //     $content_compiler = "";

    //     if (is_array($content)) {

    //         foreach($content as $key => $value) {
    //             $value = explode('href', $value);

    //             if (($key+1) == $active) {
    //                 $value[0] .= 'class ="nav-link active" ';

    //             } elseif (($key+1) == $disabled) {
    //                 $value[0] .= 'class ="nav-link disabled" ';

    //             } else {
    //                 $value[0] .= 'class ="nav-link" ';
    //             }
    //             $value = implode('href', $value);
    //             $content_compiler .= '<li class="nav-item">'.$value.'</li>';
    //         }
    //         $compiler .= $content_compiler;

    //     } else {
    //         $content_compiler .= 'Please set the content as an array';
    //         $compiler .= $content_compiler;
    //     }

    //     if ($script) {
    //             $compiler .= "<script>$script</script>";
    //     } 

    //     if ($style) {
    //             $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= "</ul>";
    // break;

    // case "pagination":
    //     $base_attributes = [];
    //     $compiler .= 
    //         '<ul id="'.$id.'" class="'.$base_class.' '.$template.
    //             '" '.attr_append($attr, $base_attributes).'>';
    //     $links_compiler = "";
        
    //     if (is_array($links)) {
    //         $i = 1;
        
    //         if ($interface) {
        
    //             if ($i == $active) {
        
    //                 if (is_array($interface)) {
    //                     $links_compiler .= 
    //                         '<li class="page-item disabled">
    //                             <a class="page-link">'.
    //                                 $interface[0].
    //                             '</a>
    //                         </li>';
        
    //                 }   else    {
    //                     $links_compiler .= 
    //                         '<li class="page-item disabled">
    //                             <a class="page-link" >
    //                                 previous
    //                             </a>
    //                         </li>';
    //                 }
        
    //             }   else  {
        
    //                 if (is_array($interface)) {
    //                     $links_compiler .= 
    //                         '<li class="page-item">
    //                             <a class="page-link" href="'.$links[$active-2].'">'.
    //                                 $interface[0].
    //                             '</a>
    //                         </li>';
        
    //                 }   else    {
    //                     $links_compiler .= 
    //                         '<li class="page-item">
    //                             <a class="page-link" href="'.$links[$active-2].'">
    //                                 previous
    //                             </a>
    //                         </li>';
    //                 }
    //             }
    //         } 
    //         foreach($links as $value) {
                
    //             if ($i == $active) {
    //                 $links_compiler .= 
    //                     '<li class="page-item active">
    //                         <a class="page-link" href="'.$value.'">'.
    //                             $i.
    //                         '</a>
    //                     </li>';
        
    //             }   else    {
    //                 $links_compiler .= 
    //                     '<li class="page-item">
    //                         <a class="page-link" href="'.$value.'">'.
    //                             $i.
    //                         '</a>
    //                     </li>';
    //             }
    //             $i++;
    //         }
    //         if ($interface) {
        
    //             if ($i == $active+1) {
        
    //                 if (is_array($interface)) {
    //                     $links_compiler .= 
    //                         '<li class="page-item disabled">
    //                             <a class="page-link">'.
    //                                 $interface[1].'
    //                             </a>
    //                         </li>';
        
    //                 }   else    {
    //                     $links_compiler .=
    //                         '<li class="page-item disabled">
    //                             <a class="page-link">
    //                                 next
    //                             </a>
    //                         </li>';
    //                 }
        
    //             }   else  {
        
    //                 if (is_array($interface)) {
    //                     $links_compiler .= 
    //                         '<li class="page-item">
    //                             <a class="page-link" href="'.$links[$active].'">'.
    //                                 $interface[1].
    //                             '</a>
    //                         </li>';
        
    //                 }   else    {
    //                     $links_compiler .= 
    //                         '<li class="page-item">
    //                             <a class="page-link" href="'.$links[$active].'">
    //                                 next
    //                             </a>
    //                         </li>';
    //                 }
    //             }
    //         } 
    //         $compiler .= $links_compiler;
        
    //     } else {
    //         $links_compiler .= 'Please set the links as an array';
    //         $compiler .= $links_compiler;
    //     }
        
    //     if ($script) {
    //             $compiler .= "<script>$script</script>";
    //     } 
        
    //     if ($style) {
    //             $compiler .= "<style>$style</style>";  
    //     } 
    //     $compiler .= "</ul>";
    // break;

    // case "progress":
    //     $base_attributes = [];
    //     $compiler .= 
    //             '<div id="'.$id.'" class="'.$base_class.'" style="width: '.
    //                     $max.'%" '.attr_append($attr, $base_attributes).'>';

    //     $compiler .= 
    //             '<div class="progress-bar '.$template.'" role="progressbar"
    //             aria-valuenow="'.$progress.'" aria-valuemin="'.$min.'"
    //             aria-valuemax="'.$max.'" style="width: 
    //             '.($progress/$max*100).'%">'.$progress.'%</div>';

    //     if ($script) {
    //             $compiler .= "<script>$script</script>";
    //     } 

    //     if ($style) {
    //             $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= '</div>';
    // break;

    // case "scrollspy":
    //     $script .= '$(\'body\').scrollspy({ target: \'#'.$id.'\'})';
    //     $base_attributes = [];
    //     $compiler .= 
    //       '<nav id="'.$id.'" class="bg-transparent '.$base_class.' '.$template.
    //         '" '.attr_append($attr, $base_attributes).'>';
        
    //     if (is_array($content)) {
        
    //       foreach($content as $key => $value) {
    //         $compiler .= 
    //           '<a class="list-group-item list-group-item-action" href="#'.$reference_id.$key.'">'.
    //               $value.
    //           '</a>';
    //       }
          
    //     } else  {
    //       $content_compiler .= 'Please set the content as an array';
    //       $compiler .= $content_compiler;
    //     }
        
    //     if ($script) {
    //         $compiler .= "<script>$script</script>";
    //     } 
        
    //     if ($style) {
    //         $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= "</nav>";
    // break;

    // case "spinner":
    //     $base_attributes =  [
    //         "role"=>"status"
    //     ];
                      
    //     $compiler .= 
    //     '<div id="'.$id.'" class="spinner '.$template.
    //     '" style="width:'.$radius.'; height:'.$radius.
    //     '" '.attr_append($attr, $base_attributes).'>
    //     <span class="sr-only">
    //     Loading...
    //     </span>';

    //     if ($script) {
    //     $compiler .= "<script>$script</script>";  
    //     } 

    //     if ($style) {
    //     $compiler .= "<style>$style</style>";  
    //     } 
    //     $compiler .= '</div>';
    // break;

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