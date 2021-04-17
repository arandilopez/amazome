<?php

include('./init.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($_POST['password'] === 'abc') {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['nombre'] = $_POST['email'];
    } else {
        setcookie('error', 'Usuario o contraseña incorrectos', time() + 30, '/', '', 0);
        header('Location: /login.php');
        exit();
    }
}

header('Location: /index.php');
exit();
