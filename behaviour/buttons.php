<?php
header("Content-type: application/x-javascript");
?>
window.onload = load;
function load(){

    function isInPage(node) {
        return (node === document.body) ? false : document.body.contains(node);
    }

    if(isInPage(document.querySelector(".btn"))) var btn = document.querySelectorAll(".btn");
    if(btn) console.log(btn);
}