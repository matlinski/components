<?php
header("Content-type: text/css");
$bg_color = "100%, 100%, 100%";
$tx_color = "0%, 0%, 0%";
$btn_classes = [];
?>
.btn.default{ <?php array_push($btn_classes, "default");?>
    display: inline-flex;
    margin: 0;
}
.btn.default>.btn_link{
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
.btn.default>.btn_link:hover,
.btn.default>.btn_link:focus{
background-color: rgba(90%, 90%, 90%, 1);
color: rgba(35%, 35%, 35%, 1);
border: 2px solid rgba(50%, 50%, 50%, 0.6);
}
.btn.casual_dark{ <?php array_push($btn_classes, "casual_dark");?>
    display: inline-flex;
    margin: 0;
}
.btn.casual_dark>.btn_link{
    background-color: rgba(23%, 35%, 60%, .85);
    padding: 0.25em 0.5em;
    text-decoration: none;
    color: rgba(<?= $bg_color ?>, 1);
    font-family: sans-serif;
    border: 3px solid rgb(11%, 25%, 50%);
    border-radius: 3px;
    transition: 0.3s ease-in-out;
    }
.btn.casual_dark>.btn_link:hover,
.btn.casual_dark>.btn_link:focus{
    background-color: rgba(23%, 35%, 60%, 1);
}
.btn.casual_dark>.btn_link:active{
    background-color: rgb(11%, 25%, 50%);
    border: 3px solid rgb(23%, 35%, 60%);
}
.btn.btn.casual_light { <?php array_push($btn_classes, "casual_light");?>
    display: inline-flex;
    margin: 0;
    }
.btn.casual_light>.btn_link{
    background-color: rgb(11%, 63%, 95%);
    padding: 0.4em 1em;
    text-decoration: none;
    color: rgba(<?= $bg_color ?>, 1);
    font-family: sans-serif;
    transition: 0.3s ease-in-out;
    }
.btn.casual_light>.btn_link:hover,
.btn.casual_light>.btn_link:focus{
    background-color: rgb(0%, 43%, 75%);
    }
.btn.casual_light>.btn_link:active{
    background-color: rgb(0%, 43%, 75%);
    -webkit-box-shadow: 0 0 0 2px rgba(<?= $bg_color ?>, 1), 0 0 0 4px rgb(11%, 63%, 95%);
    box-shadow: 0 0 0 2px rgba(<?= $bg_color ?>, 1), 0 0 0 4px rgb(11%, 63%, 95%);
    }
.btn.fun_blue{ <?php array_push($btn_classes, "fun_blue");?>
    display: inline-flex;
    margin: 0;
    }
.btn.fun_blue>.btn_link{
    background-color: rgb(22%, 59%, 94%);
    padding: 0.4em 1.5em;
    text-decoration: none;
    color: rgba(<?= $bg_color ?>, 1);
    font-family: sans-serif;
    border-radius: 9px;
    transition: 0.3s ease-in-out;
    }
.btn.fun_blue>.btn_link:hover,
.btn.fun_blue>.btn_link:focus{
    background-color: rgba(22%, 59%, 94%, 0.9);
    }
.btn.fun_blue>.btn_link:active{
    background-color: rgba(22%, 59%, 94%, 0.7);
    }
.btn.fun_red{ <?php array_push($btn_classes, "fun_red");?>
    display: inline-flex;
    margin: 0;
    }
.btn.fun_red>.btn_link{
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
.btn.fun_red>.btn_link:hover,
.btn.fun_red>.btn_link:focus{
    background-color: rgb(70%, 5%, 5%);
    }
.btn.fun_red>.btn_link:active{
    background-color: rgb(60%, 10%, 10%);
    }
.btn.elegant{ <?php array_push($btn_classes, "elegant");?>
    display: inline-flex;
    margin: 0;
    }
.btn.elegant>.btn_link{
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
.btn.elegant>.btn_link::before {
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
.btn.elegant>.btn_link:hover::before,
.btn.elegant>.btn_link:focus::before {
        top: 0;
        bottom: 0;
    }
.btn.elegant>.btn_link:hover,
.btn.elegant>.btn_link:focus{
    color: rgba(<?= $bg_color ?>, 1);
    }
.btn.elegant>.btn_link:active{
        background-color: rgba(<?= $tx_color ?>, 1);
        border: 2px solid rgba(<?= $bg_color ?>, 1);
    }
.btn.smart{ <?php array_push($btn_classes, "smart");?>
    display: inline-flex;
    margin: 0;
    }
.btn.smart>.btn_link{
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
.btn.smart>.btn_link:hover,
.btn.smart>.btn_link:focus{
        border: 2px solid rgba(<?= $tx_color ?>, 1);
    }
