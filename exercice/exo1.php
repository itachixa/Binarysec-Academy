<?php
if ((int)($_GET["nom"])){
    echo "le nom ne doit pas etre un entier";
}elseif(isset($_GET["nom"])==null){
    echo"Bonjour invité";
}else{
    echo "Bonjour ".$_GET["nom"];
}