<?php
if (isset($_GET['items'])) { // Vérifie si le paramètre "items" est défini dans l'URL
    $items = explode(',', $_GET['items']); // Divise la chaîne d'éléments séparés par des virgules en un tableau
    echo "<ul>"; // Démarre une liste non ordonnée HTML
    foreach ($items as $item) { // Parcourt chaque élément dans le tableau
        echo "<li>" . htmlspecialchars($item) . "</li>"; // Affiche chaque élément dans une balise de liste HTML, en échappant les caractères spéciaux pour la sécurité
    }
    echo "</ul>"; // Termine la liste non ordonnée HTML
} else { // Si le paramètre "items" n'est pas défini, affiche un message d'erreur   
    echo "Veuillez passer une liste d'éléments.";
}
