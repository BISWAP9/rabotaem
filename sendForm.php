<?php
$name = $_POST["name"];
$tel = $_POST["tel"];
$work = $_POST["work"];

mail('gajiev.mirab@yandex.ru', 'Заявка', "$name: $tel 
$work");
