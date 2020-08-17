<?php
session_start();

$login = 'login';
$password = '123456';
if (! isset($_SESSION['LOGIN']) || $_SESSION['LOGIN'] != 'YES') {

    ?>
    <form action="" method="POST">
        <p><b>Авторизация</b></p>
        <input type="text" name="text">
        <input type="password" name="password">
        <p><input type="submit"></p>
    </form>

    <?php
} else {
    echo 'Привет, ' . $login;
}
if (! empty($_POST['text']) && ! empty($_POST['password'])) {
    if ($_POST['text'] == $login && $_POST['password'] == $password) {
        $_SESSION['LOGIN'] = 'YES';
    }
}