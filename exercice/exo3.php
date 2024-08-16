<?php
if (isset($_GET["n"]) == null) {// Vérifie si le paramètre "n" est défini dans l'URL
    
    echo "Veuillez nous fournir le nombre";// Si "n" n'est pas défini, affiche un message demandant de fournir un nombre
} 

elseif ((int)($_GET["n"])) {// Vérifie si le paramètre "n" est un entier
  
    for ($i = 0; $i <= 10; $i++) {  // Si "n" est un entier, affiche la table de multiplication de "n" de 0 à 10
        // Affiche le calcul de la table de multiplication pour chaque valeur de $i
        print($_GET["n"]) . "*" . $i . "=";
        echo $_GET["n"] * $i;
        echo "<br>";//fait un saut à la ligne
    }
} else {
    // Si "n" n'est pas un entier, affiche un message demandant de fournir un entier
    echo "Veuillez fournir un entier";
}
?>
