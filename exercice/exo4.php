<?php
if (isset($_GET['numbers'])) {// Vérifie si le paramètre "numbers" est défini dans l'URL
    $numbers = explode(',', $_GET['numbers']); // Divise la chaîne de nombres séparés par des virgules en un tableau
    
    
    foreach ($numbers as $number) {// Parcourt chaque nombre dans le tableau  
        if ($number % 2 == 0) {// Vérifie si le nombre est pair en utilisant l'opérateur modulo 
            echo "$number<br>"; // Si le nombre est pair, affiche le nombre suivi d'un retour à la ligne
        }
    }
} else {  
    echo "Veuillez passer un tableau de nombres.";// Si le paramètre "numbers" n'est pas défini, affiche un message d'erreur
}
?>
