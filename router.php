<?php
session_start();
$url = explode("/", $_SERVER['REQUEST_URI']);

if ($url[1] == "sendForm.php") {
	$content = file_get_contents("page/main.html");
} else {
	$content = file_get_contents("page/main.html");
}
