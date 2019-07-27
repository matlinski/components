<?php 
function compiler($base_class, $scheme = null){

    $compiler = "";
    
        foreach($scheme as $value){
            if ($value["condition"] === true) {
                    $compiler .= $value["line"];
            }
        }

    // break;

    // case "breadcrumb":
    //     $base_attributes = [];

    //     if ($separator) {
    //         $style .= '
    //             .breadcrumb-item + .breadcrumb-item::before{
    //                 content: "'.$separator.'";
    //             }
    //         ';
    //     }
    //     $compiler = "";
    //     $compiler .= 
    //         '<ul id="'.$id.'" class="'.$base_class.' '.$template.
    //         '" '.attr_append($attr, $base_attributes).'>';
        
    //     if (is_array($content)) {
    //         $content_compiler = "";
    //         $i = 1;
        
    //         foreach($content as $value) {
        
    //             if ($i === (count($content)) ) {
    //                 $content_compiler .= 
    //                 '<li class="breadcrumb-item active" aria-current="page">'.
    //                     $value.
    //                 '</li>';
                    
    //             }	else	{
    //                 $content_compiler .= 
    //                 '<li class="breadcrumb-item">'.
    //                     $value.
    //                 '</li>';
    //             } 
    //             $i++;
    //         }
    //         $compiler .= $content_compiler;
        
    //     } else {
    //         $content_compiler .= 'Please set the content as an array';
    //         $compiler .= $content_compiler;
    //     }
        
    //     if ($script) {
    //         $compiler .= "<script>$script</script>";
    //     }
        
    //     if ($style) {
    //         $compiler .= "<style>$style</style>"; 
    //     }
    //     $compiler .= "</ul>";
    // break;

    // case "btn":


    //     } elseif ($tag === "input")  {
        
    //         $compiler .= '<div id="'.$id.'" class="input-group" style="width:auto">';
    //         $compiler .= '<input class="'.$base_class.' '.$template.'" ';
    
    //         }   else    {
        
    //         if ($script) {
    //             $compiler .= "<script>$script</script>";
    //         }
        
    //         if ($style) {
    //             $compiler .= "<style>$style</style>";
    //         } 
        
    //         $compiler .= '</div>'; 
    //     }
        
    //     if ($dropdown) {
        
    //         if (is_array($dropdown)) {
    //             $drop_compilator = "";
    //             $i = 0;
        
    //             foreach ($dropdown as $value) {
        
    //                 if ($i < (count($dropdown)-1) && !preg_match("/[<>]+/",
    //                     $dropdown[count($dropdown)-1])) {
                            
    //                     $drop_compilator .= $value;
    //                     $i++;
        
    //                 }   elseif ($i <= (count($dropdown)-1) && preg_match("/[<>]+/",
    //                             $dropdown[count($dropdown)-1]))  {
        
    //                     $drop_compilator .= $value;
    //                     $i++;
        
    //                 }   else    {
    //                     break;
    //                 }
    //             }
    //             $compiler .= 
    //                 '<div class="dropdown-menu">'.
    //                     $drop_compilator.
    //                 '</div>';
        
    //         }   else    {
    //             $compiler .= 
    //                 '<div class="dropdown-menu">'.
    //                     $dropdown.
    //                 '</div>';
    //         } 
    //     } 
        
    //     if ($collapse) {
    //         $compiler .= 
    //             '<div class="collapse navbar-collapse" id="'.$secondary_id.'">'.
    //                 $collapse.
    //             '</div>';
    //     }
    // break;

    // case "card":
    //     $compiler .= '<div id="'.$id.'" class="'.$base_class.' '.$template.'";">';
    //     $compiler .= $image;
    //     $compiler .= 
    //         '<div class="card-body">'.
    //             $content.
    //         '</div>';
        
    //     if ($script) {
    //         $compiler .= "<script>$script</script>";
    //     } 
        
    //     if ($style) {
    //         $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= "</div>";
    // break;

    // case "carousel":
    //     $base_attributes =  [
    //         "data-ride" =>  "carousel"
    //     ];

    //     $compiler .= 
    //     '<div id="'.$id.'" class="'.$base_class.' '.$template.
    //     '" '.attr_append($attr, $base_attributes).'>';

    //     $compiler .= '<div class="carousel-inner">';

    //     if (is_int($interval)) {
    //     $set_interval = 'data-interval="'.$interval.'"';
    //     }

    //     if (is_array($content)) {

    //     if ($indicators) {
    //     $compiler .= '<ol class="carousel-indicators">';

    //     foreach($content as $key => $value) {

    //     if (($key+1) === $active ) {
    //         $compiler .= 
    //             '<li data-target="#'.$id.'" data-slide-to="'.$key.'" class="active"></li>';

    //     }   else    {
    //         $compiler .= 
    //             '<li data-target="#'.$id.'" data-slide-to="'.$key.'"></li>';
    //     } 
    //     }
    //     $compiler .= '</ol>';
    //     }
    //     $content_compiler = '';

    //     foreach($content as $key => $value) {

    //     if (($key+1) === $active ) {
    //     $content_compiler .= '<div class="carousel-item active" '.$set_interval.'>';

    //     }   else    {
    //     $content_compiler .= '<div class="carousel-item" '.$set_interval.'>';
    //     } 
    //     $content_compiler .= $value;
    //     $content_compiler .= '</div>';
    //     }
    //     $compiler .= $content_compiler;

    //     if ($controls) {
    //     $compiler .= 
    //     '<a class="carousel-control-prev" href="#'.$id.'" role="button" data-slide="prev">
    //     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    //     <span class="sr-only">Previous</span>
    //     </a>
    //     <a class="carousel-control-next" href="#'.$id.'" role="button" data-slide="next">
    //     <span class="carousel-control-next-icon" aria-hidden="true"></span>
    //     <span class="sr-only">Next</span>
    //     </a>';
    //     }

    //     } else {
    //     $content_compiler .= 'Please set the content as an array';
    //     $compiler .= $content_compiler;
    //     }
    //     $compiler .= "</div>";

    //     if ($script) {
    //     $compiler .= "<script>$script</script>";
    //     } 

    //     if ($style) {
    //     $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= "</div>";
    // break;

    // case "form-group":
    //     $compiler .= '<div id="'.$id.'" style="width:auto" class="'.$base_class.' '.$template.'">';

    //     if ($label) {
        
    //         if (is_array($label)) {
    //             $compiler .= 
    //                 '<label for="'.$id.'" class="'.$label[1].'">'.
    //                     $label[0].
    //                 '</label>';
        
    //         }   else    {
    //             $compiler .= '<label for="'.$id.'">'.
    //                             $label.
    //                          '</label>';
    //         } 
    //     }
    //     $compiler .= '<div class="input-group ">';
        
    //     $base_attributes =  [
    //                             "type"              =>  "text",
    //                             "placeholder"       =>  "example placeholder",
    //                             "aria-label"        =>  "example",
    //                             "aria-describedby"  =>  "basic-addon"
    //                         ];
        
    //     if ($sticker) {
        
    //         if (preg_match("/<\/span>/", $sticker)) {
    //             $style .= '#'.$id.'.'.$base_class.'>.input-group>div{
    //                 display: -ms-flexbox;
    //                 display: flex;
    //                 -ms-flex-align: center;
    //                 align-items: center;
    //                 padding: .375rem .75rem;
    //                 margin-bottom: 0;
    //                 font-size: 1rem;
    //                 font-weight: 400;
    //                 line-height: 1.5;
    //                 color: #495057;
    //                 text-align: center;
    //                 white-space: nowrap;
    //                 background-color: #e9ecef;
    //                 border: 1px solid #ced4da;
    //                 border-radius: .25rem;
    //             }';
    //         }
        
    //         if (is_array($sticker)) {
        
    //             if ($sticker[1]=== "append") {
        
    //                if ($tag === "input") {
    //                    $base_attributes["value"] = $content;
    //                } 
    //                $compiler .= 
    //                 '<'.$tag.' class="form-control" '.
    //                 attr_append($attr, $base_attributes).'>';
        
    //                if ($tag !== "input") {
    //                    $compiler .= $content;
    //                } 
    //             }
    //             $compiler .= '<div class="input-group-'.$sticker[1].'">';
    //             $compiler .= $sticker[0];
        
    //         }   else    {
    //             $compiler .= '<div class="input-group-prepend">';
    //             $compiler .= $sticker;
    //         } 
    //         $compiler .= '</div>';
        
    //         if ($tag === "input") {
    //             $base_attributes["value"] = $content;
    //         } 
    //         $compiler .= 
    //             '<'.$tag.' class="form-control" '.
    //             attr_append($attr, $base_attributes).'>';
        
    //         if ($tag !== "input") {
    //             $compiler .= $content;
    //         } 
        
    //     }   else    {
        
    //         if ($tag === "input") {
    //             $base_attributes["value"] = $content;
    //         } 
    //         $compiler .= 
    //             '<'.$tag.' class="form-control" '.
    //             attr_append($attr, $base_attributes).'>';
        
    //         if ($tag !== "input") {
    //             $compiler .= $content;
    //         } 
    //     }
        
    //     if ($tag !== "input") {
    //         $compiler .= "</$tag>";
    //     } 
    //     $compiler .= "</div>";
        
    //     if ($script) {
    //         $compiler .= "<script>$script</script>";
    //     } 
        
    //     if ($style) {
    //         $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= "</div>";
    // break;

    // case "jumbotron":

    //     $base_attributes = [];

    //     $compiler .=    '<div id="'.$id.'" class="'.$base_class.
    //                     ' '.$template.'" '.attr_append($attr, $base_attributes).'>';
                        
    //     $compiler .= '<div class="container">';
    //     $compiler .= $header;
    //     $compiler .= $body;
    //     $compiler .= "</div>";
        
    //     if ($script) {
    //         $compiler .= "<script>$script</script>";
    //     } 
        
    //     if ($style) {
    //         $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= "</div>";
    // break;
    
    // case "media":
    //     $style .=  '#'.$id.'>.'.$base_class.'{
    //         display: flex; flex-direction: row
    //     } 
    //     #'.$id.'>.'.$base_class.'>img{
    //         flex-basis: 150px; margin: 1.25rem 0 0 1.25rem
    //     } 
    //     #'.$id.'>.'.$base_class.'>.card-body{
    //         flex-basis: 100%
    //     }';

    //     $base_attributes =[];
    //     $compiler .= 
    //     '<div id="'.$id.'" class="'.$base_class.
    //     ' '.$template.'" '.attr_append($attr, $base_attributes).'>';

    //     if (!$reverse) {
    //     $compiler .= $image; 
    //     }
    //     $compiler .= '<div class="card-body">'.
    //                 $content.
    //             '</div>';

    //     if ($reverse) {
    //     $compiler .= $image;
    //     }

    //     if ($script) {
    //     $compiler .= "<script>$script</script>";
    //     } 

    //     if ($style) {
    //     $compiler .= "<style>$style</style>";
    //     }
    //     $compiler .= "</div>";
    // break;

    // case "modal":
    //     $script .= 
    //     '$(\'#myModal\').on(\'shown.bs.modal\', function () {
    //         $(\'#myInput\').trigger(\'focus\')
    //     })';
      
    //     $base_attributes =  [
    //                             "tabindex"    =>  "-1",
    //                             "role"        =>  "dialog",
    //                             "aria-hidden" =>  "true"
    //                         ];
    //     $compiler .= 
    //         '<div id="'.$trigger_id.'" class="'.$base_class.
    //         ' '.$template.'" '.attr_append($attr, $base_attributes).'>';
    //     $compiler .= '<div class="modal-dialog" role="document">';
    //     $compiler .= '<div class="modal-content">';
        
    //     $compiler .= '<div class="modal-header">';
    //     $compiler .= $header;
    //     $compiler .= 
    //         '<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    //             <span aria-hidden="true">
    //                 &times;
    //             </span>
    //         </button>';
    //     $compiler .= '</div>';
        
    //     $compiler .= '<div class="modal-body">';
    //     $compiler .= $body;
    //     $compiler .= '</div>';
        
    //     $compiler .= '<div class="modal-footer">';
    //     $compiler .= '<button type="button" class="btn btn-secondary" data-dismiss="modal">
    //                         Close
    //                     </button>';
    //     $compiler .= $footer;
    //     $compiler .= '</div>';
        
    //     $compiler .= '</div>';
    //     $compiler .= '</div>';
        
    //     if ($script) {
    //         $compiler .= "<script>$script</script>";
    //     } 
        
    //     if ($style) {
    //         $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= '</div>';
    // break;
    
    // case "navbar":
    //     $base_attributes =[];
    //     $compiler .= 
    //             '<nav id="'.$id.'" class="'.$base_class.' '.$template.
    //                     '" '.attr_append($attr, $base_attributes).'>';
                        
    //     $compiler .= $content;

    //     if ($script) {
    //             $compiler .= "<script>$script</script>";
    //     } 

    //     if ($style) {
    //             $compiler .= "<style>$style</style>";
    //     } 
    //     $compiler .= "</nav>";
    // break;

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