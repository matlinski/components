<?php
header("Content-type: text/css");
$bg_color = "100%, 100%, 100%";
$tx_color = "0%, 0%, 0%";
?>
.btn.default{
    display: inline-flex;
    margin: 0;
}
.btn.default>a{
    background-color: rgba(90%, 90%, 90%, 0.65);
    padding: 0.5em 0.75em;
    text-decoration: none;
    color: rgba(50%, 50%, 50%, 1);
    font-weight: 900;
    font-family: sans-serif;
    border: 2px solid rgba(50%, 50%, 50%, 0.3);
    border-radius: 2px;
    transition: 0.3s ease-in-out;
}
.btn.default a:visited{
    color: rgba(35%, 35%, 35%, 0.65);
}
.btn.default>a:hover,
.btn.default>a:focus{
background-color: rgba(90%, 90%, 90%, 1);
color: rgba(35%, 35%, 35%, 1);
border: 2px solid rgba(50%, 50%, 50%, 0.6);
}
.btn.casual_dark{
    display: inline-flex;
    margin: 0;
}
.btn.casual_dark>a{
    background-color: rgba(23%, 35%, 60%, .85);
    padding: 0.25em 0.5em;
    text-decoration: none;
    color: rgba(<?= $bg_color ?>, 1);
    font-family: sans-serif;
    border: 3px solid rgb(11%, 25%, 50%);
    border-radius: 3px;
    transition: 0.3s ease-in-out;
    }
.btn.casual_dark>a:hover,
.btn.casual_dark>a:focus{
    background-color: rgba(23%, 35%, 60%, 1);
}
.btn.casual_dark>a:active{
    background-color: rgb(11%, 25%, 50%);
    border: 3px solid rgb(23%, 35%, 60%);
}
.btn.btn.casual_light {
    display: inline-flex;
    margin: 0;
    }
.btn.casual_light>a{
    background-color: rgb(11%, 63%, 95%);
    padding: 0.4em 1em;
    text-decoration: none;
    color: rgba(<?= $bg_color ?>, 1);
    font-family: sans-serif;
    transition: 0.3s ease-in-out;
    }
.btn.casual_light>a:hover,
.btn.casual_light>a:focus{
    background-color: rgb(0%, 43%, 75%);
    }
.btn.casual_light>a:active{
    background-color: rgb(0%, 43%, 75%);
    -webkit-box-shadow: 0 0 0 2px rgba(<?= $bg_color ?>, 1), 0 0 0 4px rgb(11%, 63%, 95%);
    box-shadow: 0 0 0 2px rgba(<?= $bg_color ?>, 1), 0 0 0 4px rgb(11%, 63%, 95%);
    }
.btn.fun_blue{
    display: inline-flex;
    margin: 0;
    }
.btn.fun_blue>a{
    background-color: rgb(22%, 59%, 94%);
    padding: 0.4em 1.5em;
    text-decoration: none;
    color: rgba(<?= $bg_color ?>, 1);
    font-family: sans-serif;
    border-radius: 9px;
    transition: 0.3s ease-in-out;
    }
.btn.fun_blue>a:hover,
.btn.fun_blue>a:focus{
    background-color: rgba(22%, 59%, 94%, 0.9);
    }
.btn.fun_blue>a:active{
    background-color: rgba(22%, 59%, 94%, 0.7);
    }
.btn.fun_red{
    display: inline-flex;
    margin: 0;
    }
.btn.fun_red>a{
    background-color: rgb(80%, 0%, 0%);
    text-transform: uppercase;
    padding: 0.5em 0.75em;
    text-decoration: none;
    font-weight: 500;
    color: white;
    font-family: sans-serif;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
    }
.btn.fun_red>a:hover,
.btn.fun_red>a:focus{
    background-color: rgb(70%, 5%, 5%);
    }
.btn.fun_red>a:active{
    background-color: rgb(60%, 10%, 10%);
    }
.btn.elegant{
    display: inline-flex;
    margin: 0;
    }
.btn.elegant>a{
    position: relative;
    text-transform: uppercase;
    padding: 0.25em 1.5em;
    text-decoration: none;
    font-weight: 500;
    color: rgba(<?= $tx_color ?>, 0.5);
    font-family: sans-serif;
    border: 2px solid rgba(<?= $tx_color ?>, 0.5);
    border-radius: 2px;
    transition: 0.3s ease-in-out;
    }
.btn.elegant>a::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    bottom: 50%;
    background: rgba(<?= $tx_color ?>, 1);
    z-index: -1;
    -webkit-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    }
.btn.elegant>a:hover::before,
.btn.elegant>a:focus::before {
        top: 0;
        bottom: 0;
    }
.btn.elegant>a:hover,
.btn.elegant>a:focus{
    color: rgba(<?= $bg_color ?>, 1);
    }
.btn.elegant>a:active{
        background-color: rgba(<?= $tx_color ?>, 1);
        border: 2px solid rgba(<?= $bg_color ?>, 1);
    }
.btn.smart{
    display: inline-flex;
    margin: 0;
    }
.btn.smart>a{
    position: relative;
    text-transform: uppercase;
    padding: 1em 2.5em;
    text-decoration: none;
    font-weight: 500;
    color: rgba(<?= $tx_color ?>, 0.5);
    font-family: sans-serif;
    border: 2px solid rgba(<?= $tx_color ?>, 0.5);
    border-radius: 2px;
    transition: 0.3s ease-in-out;
    }
.btn.smart>a:hover,
.btn.smart>a:focus{
        border: 2px solid rgba(<?= $tx_color ?>, 1);
    }
