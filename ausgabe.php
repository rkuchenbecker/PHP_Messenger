<?php
$pfadDatei = "chatbox.csv";
function lese_Datensaetze($datei)
{
    $datensaetze = explode(PHP_EOL, $datei);
    return array_map("lese_Datenfelder", $datensaetze);
}

function lese_Datenfelder($datensatz)
{
    $felder = explode(";", $datensatz);
    return $felder;
}

if (is_file($pfadDatei)) {
    $datei = file_get_contents($pfadDatei);
    $daten = lese_Datensaetze($datei);
    foreach ($daten as $eintrag) {
        if (count($eintrag) == 3) {
            printf("<div class=eintrag>
                <b>%s</b> schrieb am %s um %s Uhr
                <p>%s</p></div>",
                $eintrag[0],
                date("d.m.Y", $eintrag[2]),
                date("H:i", $eintrag[2]),
                htmlspecialchars($eintrag[1])
            );
        }
    }
}
header("location: .");
?>