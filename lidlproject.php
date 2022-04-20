<?php

require('user_validator.php');

if (isset($_POST['submit'])) {
    $validation = new UserValidator($_POST);

    $errors = $validation->validateForm();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Lidl</title>
</head>

<body>
    <div class="new-user">
        <h2>Create new user</h2>

        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" value=<?php echo !empty($_POST['username']) ?   htmlspecialchars($_POST['username']) : ''; ?>>

            <div class="error">
                <?php echo $errors['username'] ?? '' ?>
            </div>

            <label for="email">Email:</label>
            <input type="text" name="email" value=<?php echo !empty($_POST['username']) ?   htmlspecialchars($_POST['username']) : ''; ?>>

            <div class="error">
                <?php echo $errors['email'] ?? '' ?>
            </div>

            <input type="submit" name="submit" value="submit">
        </form>

    </div>
</body>

</html>