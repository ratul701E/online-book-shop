<?php

    session_destroy();
    setcookie('username', $username, time() -1, '/');
    header('Location ../view/sign-in.php')

?>