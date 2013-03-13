<?php

echo "hello Leon is gay, this is pretty amazing <br/>" // test ob es funktioniert

$db = @Datenbankname mysqli('localhost', 'username', 'password', 'database'); // MyAdmin infos eingeben um mit der Datenbank zu verbinden 
if (mysqli_connect_errno()) {
    die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}

'INSERT INTO
    Datenbankname(Spalte1, spalte2, spalte3) // einfügen der Daten, benennung der DB und der Spalten
VALUES'
    ("Ich",            // Die einzufügenen Daten
     "Meine bla bla",
     "Hiermit teste ich wie man Datensätze in MySQL einfügt,)";

?>