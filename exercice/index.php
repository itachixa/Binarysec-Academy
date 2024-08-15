<?php
if (isset($_GET['numbers'])) {
    $numbers = explode(',', $_GET['numbers']);
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            echo "$number<br>";
        }
    }
} else {
    echo "Veuillez passer un tableau de nombres.";
}
?>