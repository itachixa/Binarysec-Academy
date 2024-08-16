<?php
if (isset($_GET["nom"]) == null) {// Vérifie si le paramètre "nom" n'est pas défini dans l'URL
    echo "Bonjour invité";// Si "nom" n'est pas défini, affiche un message de bienvenue pour un invité
}elseif ((int)($_GET["nom"])) {// Vérifie si le paramètre "nom" dans l'URL est un entier 
    echo "le nom ne doit pas etre un entier";// Si "nom" est un entier, affiche un message d'erreur
} 

else {
    // Si "nom" est défini et n'est pas un entier, affiche un message de bienvenue personnalisé
    echo "Bonjour " . $_GET["nom"];
}
?>
