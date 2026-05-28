<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$title = isset($_SESSION['old']['title']) ? $_SESSION['old']['title'] : "";
$price = isset($_SESSION['old']['price']) ? $_SESSION['old']['price'] : "";
$release_year = isset($_SESSION['old']['release_year']) ? $_SESSION['old']['release_year'] : "";

unset($_SESSION['errors'], $_SESSION['old']);

include "../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST["title"] ?? "");
    $price = trim($_POST["price"] ?? "");
    $release_year = trim($_POST["release_year"] ?? "");

    if ($title === "") {
        $errors[] = "Titel is verplicht.";
    } elseif (strlen($title) < 3) {
        $errors[] = "Titel moet minimaal 3 tekens bevatten.";
    } elseif (strlen($title) > 50) {
        $errors[] = "Titel mag maximaal 50 tekens bevatten.";
    }

    if ($price === "") {
        $errors[] = "Prijs is verplicht.";
    } elseif (!is_numeric($price)) {
        $errors[] = "Prijs moet een numerieke waarde zijn.";
    }

    if ($release_year === "") {
        $errors[] = "Release jaar is verplicht.";
    } elseif (!is_numeric($release_year)) {
        $errors[] = "Release jaar moet een numerieke waarde zijn.";
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("INSERT INTO games (title, price, release_year) VALUES (:title, :price, :release_year)");
        $stmt->execute([
            ":title" => $title,
            ":price" => $price,
            ":release_year" => $release_year,
        ]);

        $_SESSION['success'] = "Game toegevoegd!";
        header("Location: home.php");
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = [
            'title' => $title,
            'price' => $price,
            'release_year' => $release_year
        ];
        header("Location: toevoegen.php");
        exit();
    }
}
?>
<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>

<h1>Game Toevoegen</h1>

<?php if (!empty($errors)): ?>
    <div style="color: red; margin-bottom: 15px;">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="">
    <div>
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($title) ?>">
    </div>
    <div>
        <label for="price">Prijs (&euro;):</label>
        <input type="number" id="price" name="price" value="<?= htmlspecialchars($price) ?>">
    </div>
    <div>
        <label for="release_year">Release jaar:</label>
        <input type="number" id="release_year" name="release_year" value="<?= htmlspecialchars($release_year) ?>">
    </div>
    <div>
        <button type="submit">Toevoegen</button>
    </div>
</form>

<?php include "../includes/footer.php"; ?>
