<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

$_SESSION['password'] = 'azxki';

if ($_POST['password'] === $_SESSION['password']){
    echo "<p>It's good !</p>";
}

else {
    echo "<p>Mot de passe incorrect !</p>";
}

?>
</body>
</html>