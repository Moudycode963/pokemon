<?php

require_once "../config/loader.php";
global $id; // ID aus Router übernehmen
if ($id === null) die("Keine ID angegeben.");

// PDO-Connection wie gehabt
$pdo = dbConnect();
$stmt = $pdo->prepare("DELETE FROM pokemon WHERE id = :id");
$stmt->execute([':id' => $id]);

// Weiterleitung zurück zur read
header("Location: /pokemon/read");
exit;