<?php
// public/index.php - Versión de prueba rápida

header('Content-Type: application/json');

echo json_encode([
    "status" => "success",
    "message" => "¡El contenedor PHP-Apache está vivo!",
    "server" => "Xeon E-2136",
    "project" => "Peaceful API Demo",
    "path_requested" => $_SERVER['REQUEST_URI']
]);
