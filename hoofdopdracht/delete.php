<?php
session_start();
include "includes/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM games WHERE id = ?");
    $stmt->execute([$id]);

    $_SESSION['success'] = "Game succesvol verwijderd.";
} else {
    $_SESSION['error'] = "Geen ID opgegeven.";
}

header("Location: pages/home.php");
exit;
