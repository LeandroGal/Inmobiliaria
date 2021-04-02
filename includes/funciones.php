<?php

require 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false, bool $titulo = false) {
    include TEMPLATES_URL . "/${nombre}.php";
}

?>