<?php
session_start();

if (isset($_GET["acon"]) && $_GET["acon"] == "cr") {
    $idProdutoCr = $_GET["id"];
    if (!isset($_SESSION["cr"][$idProdutoCr])) {
        $_SESSION["cr"][$idProdutoCr] = 1;
    }
    $count = count((array) $_SESSION["cr"]);


    echo <<<HTML
    <script>
document.getElementById("crnContador").innerHTML += $count
    </script>
HTML;

}




?>