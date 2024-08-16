<?php
if (isset($_GET['items'])) {
    $items = explode(',', $_GET['items']);
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>" . htmlspecialchars($item) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Veuillez passer une liste d'éléments.";
}
?>