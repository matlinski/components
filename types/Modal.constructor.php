<?php

function Modal($input = ""){
$compiler = "";
$base_class = "modal";
$default = ["header"=> '<h5 class=\'modal-title\'>Header placeholder</h5>', "body"=> '<p>Body placeholder</p>', "footer"=> '<button class=\'btn btn-primary\'>Take action!</button>',"trigger_id"=>"myID", "attr" => '', "template" =>"fade", "style"=> "", "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$script .= '$(\'#myModal\').on(\'shown.bs.modal\', function () {
    $(\'#myInput\').trigger(\'focus\')
  })';
$base_attributes = ["tabindex"=>"-1", "role"=>"dialog", "aria-hidden"=>"true"];
$compiler .= '<div id="'.$trigger_id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$compiler .= '<div class="modal-dialog" role="document">';
$compiler .= '<div class="modal-content">';

$compiler .= '<div class="modal-header">';
$compiler .= $header;
$compiler .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>';
$compiler .= '</div>';

$compiler .= '<div class="modal-body">';
$compiler .= $body;
$compiler .= '</div>';

$compiler .= '<div class="modal-footer">';
$compiler .= '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
$compiler .= $footer;
$compiler .= '</div>';

$compiler .= '</div>';
$compiler .= '</div>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= '</div>';
return $compiler;
}

?>