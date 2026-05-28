<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Message</title>
</head>
<body>
<?php if (isset($_SESSION['flash'])): ?>
    <p><?php echo $_SESSION['flash']; ?></p>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
</body>
</html>
