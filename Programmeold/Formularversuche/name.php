<html>
<head>
<style type="text/css">
body {text-align: center;}
</style>
</head>
<body>

 <a href="startpage.html"><img src="startpage.png" width="766" height="149" border="0" alt="Formular"></a> <p>

<body background="grey.jpg" text="#990000" link="#0000CC" vlink="#000066" alink="#000000">


<?php

$vorname = $_POST["Vorname"];
$nachname = $_POST["Nachname"];

$SN1 = $_POST["SN1"];
$SN2 = $_POST["SN2"];
$SN3 = $_POST["SN3"];
$SN4 = $_POST["SN4"];
$MN1 = $_POST["MN1"];
$MN2 = $_POST["MN2"];
$MN3 = $_POST["MN3"];
$MN4 = $_POST["MN4"];

$summeSN = 0;
$summeMN = 0;

$snoten = array();
$mnoten = array();

array_push($snoten, $SN1, $SN2,$SN3, $SN4);
array_push($mnoten, $MN1, $MN2, $MN3, $MN4);




for ($i=0; $i<count($snoten); $i++ ){
	$summeSN += $snoten[$i];
	}

for ($i=0; $i<count($mnoten); $i++ ){
	$summeMN += $mnoten[$i];
	}



echo "<br/>";
echo "<br/>";
echo "<br/>";

$avs = $summeSN/count($snoten);
$avm = $summeMN/count($mnoten);
$avg = ($avs+$avm)/2;

echo "schriflich av. ";
echo $avs;

echo "<br/>";

echo "mdl av. ";
echo $avm;

echo "<br/>";

echo "av. generell ";
echo $avg;


?> 


</body>
</html>