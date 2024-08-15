<?php
if (isset($_GET["n"])==null){
    echo" veuillez nous fournir le nombre ";
}elseif((int)($_GET["n"])){

for ($i = 0; $i <= 10; $i++) {
    print($_GET["n"])."*".$i."=";
    echo $_GET["n"]*$i;
    echo "<br>";
}
}else{
    echo "veuillez fournir un entier";
}


?>
