<?php
$pfadDatei = "chatbox.csv";
if(count($_POST) > 0) {
    $_POST["text"] = str_replace(";", ",", $_POST['text']);
    $daten = $_POST;
    array_push($daten, time());
    $datensatz = join(";", $daten) . PHP_EOL;
    file_put_contents($pfadDatei, $datensatz, FILE_APPEND);
    header("location: ausgabe.php");
}?>