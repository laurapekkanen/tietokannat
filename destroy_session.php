<?php
    // Istuntokohtaisten muuttujien hävittäminen muistista
    session_unset();

    // Istunnon päättäminen
    session_destroy();

    header("Location:index.php");
?>
