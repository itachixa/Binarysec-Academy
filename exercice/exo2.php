<?php
if (isset($_GET["a"]) == null || isset($_GET["b"]) == null || isset($_GET["op"]) == null) {// Vérifie si les paramètres "a", "b", ou "op" ne sont pas définis dans l'URL
    // Si un des paramètres nécessaires est manquant, affiche un message d'erreur
    echo "Un élément nécessaire pour l'opération est manquant";
} else { // Si tous les paramètres sont définis, effectue l'opération en fonction de la valeur de "op"

    if ($_GET["op"] == "add") { // Si l'opération est "add", additionne les valeurs des paramètres "a" et "b"    
        echo $_GET["a"] + $_GET["b"];
    } elseif ($_GET["op"] == "sub") { // Si l'opération est "sub", soustrait la valeur de "b" de celle de "a"   
        echo $_GET["a"] - $_GET["b"];
    } elseif ($_GET["op"] == "multi") { // Si l'opération est "multi", multiplie les valeurs des paramètres "a" et "b"
        echo $_GET["a"] * $_GET["b"];
    } elseif ($_GET["op"] == "div") { // Si l'opération est "div", divise la valeur de "a" par celle de "b"
        if ($_GET["b"] != 0) { // Vérifie si "b" n'est pas égal à zéro pour éviter la division par zéro    
            echo $_GET["a"] / $_GET["b"];
        } else { // Si "b" est égal à zéro, affiche un message d'erreur pour la division par zéro
            echo "Erreur : Division par zéro.";
        }
    } else { // Si l'opération n'est pas reconnue, affiche un message d'erreur
        echo "Opération non reconnue.";
    }
}
