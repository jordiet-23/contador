<?php
date_default_timezone_set('Europe/Madrid');

$fecha = date("d/m/Y H:i:s");


if (isset($_COOKIE["visita"])) {
    list($numVisitas, $ultimaFecha) = explode("|", $_COOKIE["visita"]);
    $numVisitas++;
    print "<h2>Hola de nou, és la visita número $numVisitas.</h2>";
    print "<p>La data actual de l'ultima visita és: $ultimaFecha.</p>";
    setcookie("visita", $numVisitas . "|" . $fecha);
} else {
    print "<h2> Hola, aquesta és la primera vegada que entres en aquesta pàgina. </h2>";
    setcookie("visita", "1|" . $fecha);
}
?>
