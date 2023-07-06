<?php
include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$userId = $_SESSION["userid"];

// Actualizar registro de salida en la tabla "logs"
$updateQuery = "UPDATE logs SET log_out = now() WHERE id = (SELECT MAX(id) FROM logs) AND id_user = ?";
$stmtUpdate = $db->prepare($updateQuery);
$stmtUpdate->bind_param("i", $userId);
$stmtUpdate->execute();

// Limpiar las variables de sesión
$_SESSION["userid"] = '';
$_SESSION["name"] = '';
$_SESSION["role"] = '';

session_destroy();

header("Location: index.php");


