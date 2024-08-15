<?php
if (isset($_GET["a"]) == null || isset($_GET["b"])==null || isset($_GET["op"]) == null) {
    echo "un element neccessaire pour l'opretaion est manquant ";
} else {
    if ($_GET["op"] == "add") {
        echo $_GET["a"] + $_GET["b"];
    } elseif ($_GET["op"] == "sub") {
        echo $_GET["a"] - $_GET["b"];
    } elseif ($_GET["op"] == "multi") {
        echo $_GET["a"] * $_GET["b"];
    } elseif ($_GET["op"] == "div") {
        if ($_GET["b"] != 0) {
            echo $_GET["a"] / $_GET["b"];
        } else {
            echo "Erreur : Division par zéro.";
        }
    } else {
        echo "Opération non reconnue.";
    }
}
