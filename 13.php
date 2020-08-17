<?php

session_start();

$products = [
    1 => [
        'price' => 100,
        'name' => 'Товар 1',
    ],
    2 => [
        'price' => 200,
        'name' => 'Товар 2',
    ],
    3 => [
        'price' => 300,
        'name' => 'Товар 3',
    ],
];
foreach($products as $key => $value) {
    echo $key . '. ' . $value['name'] . ' - ' . $value['price'];
    echo "<form action=\"\" method=\"POST\">
        <input type=\"text\" name=\"productId\" value=\"{$key}\" hidden>
        <p><input type=\"submit\" value=\"Купить\"></p>
    </form></br>";
}
if (isset($_POST['productId'])) {
    if(empty($_SESSION['BASKET'][$_POST['productId']])) {
        $_SESSION['BASKET'][$_POST['productId']] = 1;
    } else {
        $_SESSION['BASKET'][$_POST['productId']] += 1;
    }

}
if (is_array($_SESSION['BASKET']) && ! empty($_SESSION['BASKET'])){
    foreach ($_SESSION['BASKET'] as $key => $value) {
        echo 'Название: '. $products[$key]['name'] . ' Количество: ' . $value . '</br>';
    }
    echo "<form action=\"\" method=\"POST\">
    <input type=\"text\" name=\"clearBasket\" value=\"1\" hidden>
    <p><input type=\"submit\" value=\"Очистить коризну\"></p>
</form></br>";
}
if(isset($_POST['clearBasket']) && $_POST['clearBasket'] == 1) {
    unset($_SESSION['BASKET']);
}
?>

