<?php
function Carousel($input = "") {
$base_class = "carousel";

$default = [
                "content"       => 
                
                    [
                    '<div>'.
                        '<p class=\'display-4\'>First caption</p>'.
                        '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est ipsam, deleniti quo quos illo voluptatibus consequuntur magni quae eaque deserunt neque explicabo consectetur minima autem placeat suscipit odit inventore!</p>'.
                    '</div>'.
                    '<img src=\'https://source.unsplash.com/2501x300?moon\' alt=\'...\'>',

                    '<div>'.
                        '<p class=\'display-4\'>First caption</p>'.
                        '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est ipsam, deleniti quo quos illo voluptatibus consequuntur magni quae eaque deserunt neque explicabo consectetur minima autem placeat suscipit odit inventore!</p>'.
                    '</div>'.
                    '<img src=\'https://source.unsplash.com/2501x300?moon\' alt=\'...\'>',

                    '<div>'.
                        '<p class=\'display-4\'>First caption</p>'.
                        '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est ipsam, deleniti quo quos illo voluptatibus consequuntur magni quae eaque deserunt neque explicabo consectetur minima autem placeat suscipit odit inventore!</p>'.
                    '</div>'.
                    '<img src=\'https://source.unsplash.com/2501x300?moon\' alt=\'...\'>'

                    ],

                'active'        =>  2,
                "caption"       =>  true,
                "controls"      =>  false,
                "indicators"    =>  false,
                "attr"          =>  "",
                "template"      =>  "slide",
                'interval'      =>  5000,
                "style"         =>  '&>.carousel-inner>.carousel-item>:not(img) {'.
                                        'position: absolute;'.
                                        'right: 15%;'.
                                        'bottom: 20px;'.
                                        'left: 15%;'.
                                        'z-index: 10;'.
                                        'padding-top: 20px;'.
                                        'padding-bottom: 20px;'.
                                        'color: #fff;'.
                                        'text-align: center;'.
                                    '}',
                "script"        =>  ""
            ];

return Compiler($base_class, Component($input, $default, $base_class));
}
?>