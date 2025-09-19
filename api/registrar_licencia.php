<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);
$id_licencia = $data["id_licencia"] ?? null;
$nombre_pc = $data["nombre_pc"] ?? null;

if (!$id_licencia || !$nombre_pc) {
    echo json_encode(["success" => false, "mensaje" => "Datos incompletos"]);
    exit;
}

try {
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    // Verificar si ya existe esa licencia con nombre de PC
    $query = new MongoDB\Driver\Query([
        "id_licencia" => $id_licencia
    ]);
    $resultado = $manager->executeQuery("megasend.licencias", $query)->toArray();

    if (count($resultado) > 0) {
        echo json_encode(["success" => false, "mensaje" => "Esta licencia ya está registrada"]);
        exit;
    }

    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert([
        "id_licencia" => $id_licencia,
        "nombre_pc" => $nombre_pc,
        "estado" => "activo",
        "fecha_activacion" => new MongoDB\BSON\UTCDateTime(),
        "fecha_expiracion" => null,
        "notas" => "Registrada automáticamente por el sistema"
    ]);

    $manager->executeBulkWrite("megasend.licencias", $bulk);

    echo json_encode(["success" => true, "mensaje" => "Licencia registrada correctamente"]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "mensaje" => "Error al registrar licencia", "error" => $e->getMessage()]);
}
