<?php

$mysqlhost="localhost"; // MySQL-Host angeben

$mysqluser="root"; // MySQL-User angeben

$mysqlpwd=""; // Passwort angeben

$connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die ("Verbindungsversuch fehlgeschlagen");

$mysqldb="notenrechner"; // Gewuenschte Datenbank angeben

mysql_select_db($mysqldb, $connection) or die("Konnte die Datenbank nicht waehlen.");

$sql = "SELECT SID, name FROM schuelerliste";

$ergebnis = mysql_query($sql) or die("Anfrage nicht erfolgreich");


while($row = mysql_fetch_object($ergebnis))
{
  echo $row->SID;
  echo $row->name;
  echo "<br/>";
  }
  
  
while ($ergb = mysql_fetch_array($ergebnis)){
}

?>

<table cellpadding="1" cellspacing="3" border="1">

<tr>


<td>SID</td>

<td>name</td>



</tr>

<?php

while ($ergb = mysql_fetch_array($ergebnis)){

?>

<tr>



<td><?=$ergb['SID']?></td>

<td><?=$ergb['name']?></td>


</tr>

<?php

}

?>

</table>
