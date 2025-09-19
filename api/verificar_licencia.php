<?php
header("Content-Type: application/json");

$id_licencia = $_GET["id_licencia"] ?? null;
$nombre_pc = $_GET["nombre_pc"] ?? null;

if (!$id_licencia || !$nombre_pc) {
    echo json_encode(["valido" => false, "mensaje" => "Parámetros incompletos"]);
    exit;
}

try {
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $query = new MongoDB\Driver\Query([
        "id_licencia" => $id_licencia
    ]);

    $resultado = $manager->executeQuery("megasend.licencias", $query)->toArray();

    if (count($resultado) === 0) {
        echo json_encode(["valido" => false, "mensaje" => "Licencia no registrada"]);
        exit;
    }

    $licencia = $resultado[0];

    if ($licencia->nombre_pc !== $nombre_pc) {
        echo json_encode(["valido" => false, "mensaje" => "Licencia registrada en otro equipo"]);
        exit;
    }

    if ($licencia->estado !== "activo") {
        echo json_encode(["valido" => false, "mensaje" => "Licencia desactivada"]);
        exit;
    }

    echo json_encode(["valido" => true, "mensaje" => "Licencia válida"]);
} catch (Exception $e) {
    echo json_encode(["valido" => false, "mensaje" => "Error al verificar licencia", "error" => $e->getMessage()]);
}

