<form action="" method="POST">
    <p><b>Поиск</b></p>
    <input type="text" name="text">
    <p><input type="submit"></p>
</form>

<?php
if (! empty($_POST['text'])) {
    echo 'Вы искали: ' . $_POST['text'];
}

