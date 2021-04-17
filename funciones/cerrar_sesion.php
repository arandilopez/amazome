<?php

include('./init.php');

if (isset($_POST['_aqui'])) {
    session_destroy();
}

header('Location: /index.php');
exit();
