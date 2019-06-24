<?php
$temp = [
"default" => [
"#btn{$GLOBALS['counter']} {
display: inline-block;
margin: 0;
}
#btn{$GLOBALS['counter']} a{
background-color: rgba(90%, 90%, 90%, 0.65);
padding: 0.5em 0.75em;
text-decoration: none;
color: rgba(50%, 50%, 50%, 1);
font-weight: 900;
font-family: sans-serif;
border: 2px solid rgba(50%, 50%, 50%, 0.3);
border-radius: 2px;
transition: 0.5s ease-in-out;
}
#btn{$GLOBALS['counter']} a:visited{
color: rgba(35%, 35%, 35%, 0.65);
}
#btn{$GLOBALS['counter']} a:hover,
#btn{$GLOBALS['counter']} a:focus{
background-color: rgba(90%, 90%, 90%, 1);
color: rgba(35%, 35%, 35%, 1);
border: 2px solid rgba(50%, 50%, 50%, 0.6);
}",
"console.log(`default button`)"
],
"casual_dark" => [
"#btn{$GLOBALS['counter']} {
    display: inline-block;
    margin: 0;
    }
    #btn{$GLOBALS['counter']} a{
    background-color: rgba(23%, 35%, 60%, .85);
    padding: 0.25em 0.5em;
    text-decoration: none;
    color: {$GLOBALS["bg-color"]};
    font-family: sans-serif;
    border: 3px solid rgb(11%, 25%, 50%);
    border-radius: 3px;
    }
    #btn{$GLOBALS['counter']} a:hover,
    #btn{$GLOBALS['counter']} a:focus{
    background-color: rgba(23%, 35%, 60%, 1);
    }
    #btn{$GLOBALS['counter']} a:active{
    background-color: rgb(11%, 25%, 50%);
    border: 3px solid rgb(23%, 35%, 60%);
    }",
    "console.log(`casual_dark button`)"
],
    "casual_light" => [
        "#btn{$GLOBALS['counter']} {
            display: inline-block;
            margin: 0;
            }
            #btn{$GLOBALS['counter']} a{
            background-color: rgb(11%, 63%, 95%);
            padding: 0.4em 1em;
            text-decoration: none;
            color: {$GLOBALS["bg-color"]};
            font-family: sans-serif;
            }
            #btn{$GLOBALS['counter']} a:hover,
            #btn{$GLOBALS['counter']} a:focus{
            background-color: rgb(0%, 43%, 75%);
            }
            #btn{$GLOBALS['counter']} a:active{
            background-color: rgb(0%, 43%, 75%);
            -webkit-box-shadow: 0 0 0 2px {$GLOBALS["bg-color"]}, 0 0 0 4px rgb(11%, 63%, 95%);
            box-shadow: 0 0 0 2px {$GLOBALS["bg-color"]}, 0 0 0 4px rgb(11%, 63%, 95%);
            }",
            "console.log(`casual_light button`)"
        ],
    "fun_blue" => [
        "#btn{$GLOBALS['counter']} {
            display: inline-block;
            margin: 0;
            }
            #btn{$GLOBALS['counter']} a{
            background-color: rgb(22%, 59%, 94%);
            padding: 0.4em 1.5em;
            text-decoration: none;
            color: {$GLOBALS["bg-color"]};
            font-family: sans-serif;
            border-radius: 9px;
            }
            #btn{$GLOBALS['counter']} a:hover,
            #btn{$GLOBALS['counter']} a:focus{
            background-color: rgba(22%, 59%, 94%, 0.9);
            }
            #btn{$GLOBALS['counter']} a:active{
            background-color: rgba(22%, 59%, 94%, 0.7);
            }",
            "console.log(`fun_blue button`)"
        ],
    "fun_red" => [
        "#btn{$GLOBALS['counter']} {
            display: inline-block;
            margin: 0;
            }
            #btn{$GLOBALS['counter']} a{
            background-color: rgb(80%, 0%, 0%);
            text-transform: uppercase;
            padding: 0.5em 0.75em;
            text-decoration: none;
            font-weight: 500;
            color: white;
            font-family: sans-serif;
            border-radius: 3px;
            }
            #btn{$GLOBALS['counter']} a:hover,
            #btn{$GLOBALS['counter']} a:focus{
            background-color: rgb(70%, 5%, 5%);
            }
            #btn{$GLOBALS['counter']} a:active{
            background-color: rgb(60%, 10%, 10%);
            }",
            "console.log(`fun_red button`)"
        ],
    "elegant" => [
        "#btn{$GLOBALS['counter']} {
            display: inline-block;
            margin: 0;
            }
            #btn{$GLOBALS['counter']} a{
            position: relative;
            text-transform: uppercase;
            padding: 0.25em 1.5em;
            text-decoration: none;
            font-weight: 500;
            color: #888;
            font-family: sans-serif;
            border: 2px solid #888;
            border-radius: 2px;
            }
            #btn{$GLOBALS['counter']} a::before {
            content: \"\";
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            bottom: 50%;
            background: {$GLOBALS['tx-color']};
            z-index: -1;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            }
            #btn{$GLOBALS['counter']} a:hover::before, #btn{$GLOBALS['counter']} a:focus::before {
                top: 0;
                bottom: 0;
            }
            #btn{$GLOBALS['counter']} a:hover,
            #btn{$GLOBALS['counter']} a:focus{
            color: {$GLOBALS["bg-color"]};
            }
            #btn{$GLOBALS['counter']} a:active{
                background-color: {$GLOBALS['tx-color']};
                border: 2px solid {$GLOBALS["bg-color"]};
            }",
            "console.log(`elegant button`)"
        ],
    "smart" => [
        "#btn{$GLOBALS['counter']} {
            display: inline-block;
            margin: 0;
            }
            #btn{$GLOBALS['counter']} a{
            position: relative;
            text-transform: uppercase;
            padding: 1em 2.5em;
            text-decoration: none;
            font-weight: 500;
            color: #888;
            font-family: sans-serif;
            border: 2px solid #888;
            border-radius: 2px;
            }
            #btn{$GLOBALS['counter']} a:hover,
            #btn{$GLOBALS['counter']} a:focus{
                border: 2px solid {$GLOBALS['tx-color']};
            }",
            "console.log(`smart button`)"
        ]
];
?>