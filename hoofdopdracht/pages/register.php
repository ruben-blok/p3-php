<?php session_start(); ?>
<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>
<?php include "../includes/db.php"; ?>

<?php
$bericht = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username === "" || $password === "") {
        $bericht = "Vul alle velden in.";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $hash]);
        $bericht = "Gebruiker succesvol geregistreerd!";
    }
}
?>

<h1>Registreren</h1>

<?php if ($bericht !== ""): ?>
    <p><?= htmlspecialchars($bericht) ?></p>
<?php endif; ?>

<form method="POST">
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Wachtwoord:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit">Registreren</button>
</form>

<?php include "../includes/footer.php"; ?>
