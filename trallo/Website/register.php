<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trallo | Login</title>
</head>
<body>
    <?php
        require_once 'layout/header.php';
        require_once 'layout/footer.php';
    ?>
<form action="backend/Controllers/registerController.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="User@mail.com" required>
    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" placeholder="Wachtwoord" required>
    <label for="second_password">Herhaal wachtwoord:</label>
    <input type="password" name="second_password" placeholder="Wachtwoord" required>
    <input type="submit" value="Register">
</form>

<?php if (isset($_GET['msg'])): ?>
    <p><?php echo $_GET['msg']; ?></p>
<?php endif; ?>

</body>
</html>