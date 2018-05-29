<?php
include '../includes/header.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new User();
    $doCheck = $login->checkLogin($username, $password);

    if (empty(trim($username)) || empty(trim($password))) {
        $error = 'Je hebt niet alle velden ingevuld!';
    } else {
        if ($doCheck === true) {
            echo 'O K E . . .';
        } else {
            $error = 'Je wachtwoord komt niet overeen met je gebruikersnaam!';
        }
    }
}
print_r($_SESSION['user_session']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard: Inloggen</title>
    <link rel="stylesheet" type="text/css" href="../../lib/css/ase/style.css">
    <link rel="stylesheet" href="../../lib/css/ase/normalize.min.css">
</head>

<body>
<div class="login">
    <h1>Inloggen</h1>
    <?php if (isset($_POST['submit'])) {
        echo '<div class="isa_error">' . $error . '</div>';
    } ?>
    <form action="" method="post">
        <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>"
               autocomplete="off" placeholder="Gebruikersnaam..."/><br/><br/>
        <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>"
               autocomplete="off" placeholder="Wachtwoord..."/><br><br>
        <button type="submit" name='submit' value="Inloggen" class="btn btn-primary btn-block btn-large">Betreed de
            wonderlijke wereld!
        </button>
    </form>
</div>
</body>
</html>