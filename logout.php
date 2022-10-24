<?php
// Crea la sessió i, si apretes a la creu, l'elimina i torna a la pàgina del formulari

session_start();

session_destroy();

header('Location:index.php');

?>