<?php

require("connect.php");

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

$sql = "INSERT INTO klienci(IDKlienta, Imie, Nazwisko, Mail, Telefon) VALUES ('','$imie','$nazwisko','$mail','$tel')";
$result = $conn->query($sql);

?>