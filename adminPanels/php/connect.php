<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "mgimonew");
if ($connect == false) {
    echo "Подключение к Базе Данных отсутствует";
    exit();
}
