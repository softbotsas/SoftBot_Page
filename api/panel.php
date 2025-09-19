<?php
// archivo: /var/www/html/api/panel.php

session_start();

// Autenticación
$usuario = "alejandro";
$contrasena = "azucar100";

if (!isset($_SESSION["autenticado"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST["user"] === $usuario && $_POST["pass"] === $contrasena) {
            $_SESSION["autenticado"] = true;
            header("Location: panel.php");
            exit;
        } else {
            $error = "Credenciales incorrectas";
        }
    }

    echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Panel de Licencias - Login</title></head><body>';
    echo '<h2>Iniciar Sesión</h2>';
    if (isset($error)) echo "<p style='color:red;'>$error</p>";
    echo '<form method="POST">';
    echo 'Usuario: <input type="text" name="user"><br>';
    echo 'Contraseña: <input type="password" name="pass"><br>';
    echo '<input type="submit" value="Entrar">';
    echo '</form></body></html>';
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["accion"])) {
    try {
        $id_licencia = $_POST["id_licencia"] ?? null;

        if (!$id_licencia || trim($id_licencia) === "") {
            throw new Exception("Falta el ID de licencia");
        }

        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;
        $filtro = ["id_licencia" => $id_licencia];

        if ($_POST["accion"] === "desactivar") {
            $bulk->update($filtro, ['$set' => ['estado' => 'inactivo']]);
        } elseif ($_POST["accion"] === "activar") {
            $bulk->update($filtro, ['$set' => ['estado' => 'activo']]);
        } elseif ($_POST["accion"] === "eliminar") {
            $bulk->delete($filtro);
        } elseif ($_POST["accion"] === "editar") {
            $notas = $_POST["notas"] ?? "";
            $fecha_expiracion = $_POST["fecha_expiracion"] ?? null;
            $updates = ['notas' => $notas];
            if ($fecha_expiracion) {
                $updates["fecha_expiracion"] = new MongoDB\BSON\UTCDateTime(strtotime($fecha_expiracion) * 1000);
            }
            $bulk->update($filtro, ['$set' => $updates]);
        }

        $manager->executeBulkWrite("megasend.licencias", $bulk);
        header("Location: panel.php");
        exit;
    } catch (Exception $e) {
        echo "<p>Error al procesar la acción: {$e->getMessage()}</p>";
    }
}

try {
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $query = new MongoDB\Driver\Query([]);
    $cursor = $manager->executeQuery("megasend.licencias", $query);
    $licencias = $cursor->toArray();
} catch (Exception $e) {
    die("Error al conectar con MongoDB: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panel de Licencias - MegaSend</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; padding: 20px; }
        table { border-collapse: collapse; width: 100%; background: white; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #eee; }
        form.inline { display: inline; margin: 0 5px; }
    </style>
</head>
<body>
<h2>Licencias Registradas</h2>
<p><a href="logout.php">Cerrar sesión</a></p>
<table>
    <tr>
        <th>ID Licencia</th>
        <th>Nombre PC</th>
        <th>Estado</th>
        <th>Activación</th>
        <th>Expiración</th>
        <th>Notas</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($licencias as $lic): ?>
        <tr>
            <td><?= htmlspecialchars($lic->id_licencia) ?></td>
            <td><?= htmlspecialchars($lic->nombre_pc) ?></td>
            <td><?= htmlspecialchars($lic->estado ?? 'n/a') ?></td>
            <td><?= isset($lic->fecha_activacion) ? date('Y-m-d H:i:s', $lic->fecha_activacion->toDateTime()->getTimestamp()) : '-' ?></td>
            <td><?= isset($lic->fecha_expiracion) ? date('Y-m-d', $lic->fecha_expiracion->toDateTime()->getTimestamp()) : '-' ?></td>
            <td><?= htmlspecialchars($lic->notas ?? '') ?></td>
            <td>
                <form class="inline" method="POST">
                    <input type="hidden" name="id_licencia" value="<?= htmlspecialchars($lic->id_licencia) ?>">
                    <input type="hidden" name="accion" value="desactivar">
                    <input type="submit" value="Desactivar">
                </form>
                <form class="inline" method="POST">
                    <input type="hidden" name="id_licencia" value="<?= htmlspecialchars($lic->id_licencia) ?>">
                    <input type="hidden" name="accion" value="activar">
                    <input type="submit" value="Activar">
                </form>
                <form class="inline" method="POST" onsubmit="return confirm('¿Eliminar esta licencia?')">
                    <input type="hidden" name="id_licencia" value="<?= htmlspecialchars($lic->id_licencia) ?>">
                    <input type="hidden" name="accion" value="eliminar">
                    <input type="submit" value="Eliminar">
                </form>
                <form class="inline" method="POST">
                    <input type="hidden" name="id_licencia" value="<?= htmlspecialchars($lic->id_licencia) ?>">
                    <input type="hidden" name="accion" value="editar">
                    Expira: <input type="date" name="fecha_expiracion" value="<?= isset($lic->fecha_expiracion) ? date('Y-m-d', $lic->fecha_expiracion->toDateTime()->getTimestamp()) : '' ?>">
                    Notas: <input type="text" name="notas" value="<?= htmlspecialchars($lic->notas ?? '') ?>">
                    <input type="submit" value="Guardar">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
