<?php

function Pagination($input = "") {
$base_class = "pagination";

$default = [
                "links"     => 
                    [
                        '#id1',
                        '#id2',
                        '#id3'
                    ],
                "active"    =>  2,
                "interface" =>  
                    [
                        "previous",
                        "next"
                    ],
                "attr"      => "",
                "template"  =>"justify-links-left",
                "style"     => "",
                "script"    => ""
            ];

            foreach(Component($input, $default, $base_class) as $key => $value) {
                $$key = $value;
           }
           function feature($links, $interface, $active){
            $links_compiler = '';
               if(is_array($links)){
                $i = 1;
        
                if ($interface) {
     
                    if ($i == $active) {
     
                        if (is_array($interface)) {
                            $links_compiler .= 
                                '<li class="page-item disabled">
                                    <a class="page-link">'.
                                        $interface[0].
                                    '</a>
                                </li>';
     
                        }   else    {
                            $links_compiler .= 
                                '<li class="page-item disabled">
                                    <a class="page-link" >
                                        previous
                                    </a>
                                </li>';
                        }
     
                    }   else  {
     
                        if (is_array($interface)) {
                            $links_compiler .= 
                                '<li class="page-item">
                                    <a class="page-link" href="'.$links[$active-2].'">'.
                                        $interface[0].
                                    '</a>
                                </li>';
     
                        }   else    {
                            $links_compiler .= 
                                '<li class="page-item">
                                    <a class="page-link" href="'.$links[$active-2].'">
                                        previous
                                    </a>
                                </li>';
                        }
                    }
                } 
                foreach($links as $value) {
             
                    if ($i == $active) {
                        $links_compiler .= 
                            '<li class="page-item active">
                                <a class="page-link" href="'.$value.'">'.
                                    $i.
                                '</a>
                            </li>';
     
                    }   else    {
                        $links_compiler .= 
                            '<li class="page-item">
                                <a class="page-link" href="'.$value.'">'.
                                    $i.
                                '</a>
                            </li>';
                    }
                    $i++;
                }
                if ($interface) {
     
                    if ($i == $active+1) {
     
                        if (is_array($interface)) {
                            $links_compiler .= 
                                '<li class="page-item disabled">
                                    <a class="page-link">'.
                                        $interface[1].'
                                    </a>
                                </li>';
     
                        }   else    {
                            $links_compiler .=
                                '<li class="page-item disabled">
                                    <a class="page-link">
                                        next
                                    </a>
                                </li>';
                        }
     
                    }   else  {
     
                        if (is_array($interface)) {
                            $links_compiler .= 
                                '<li class="page-item">
                                    <a class="page-link" href="'.$links[$active].'">'.
                                        $interface[1].
                                    '</a>
                                </li>';
     
                        }   else    {
                            $links_compiler .= 
                                '<li class="page-item">
                                    <a class="page-link" href="'.$links[$active].'">
                                        next
                                    </a>
                                </li>';
                        }
                    }
                }
               } else {
                    $links_compiler = 'Please set the links as an array';
               }
             
                     return $links_compiler;
           }
           
           $scheme =   [
                          [
                               "condition" => true,
                               "line"      => html('nav',"id='$id' class='$base_class 
                                                $template' ".attr_append($attr))
                          ],
                          [
                               "condition" => true,
                               "line"      => feature($links, $interface, $active)
                          ],
                          [
                               "condition" => !empty($script),
                               "line"      => html('script').$script.html('script','close')
                          ],
                          [
                               "condition" => !empty($style),
                               "line"      => html('style').$style.html('style','close')
                          ],
                          [
                               "condition" => true,
                               "line"      => html('ul','/')
                          ],
                       ];
                       
           return Compiler($base_class, $scheme);
}

?>