<?php
header("Content-type: text/xml");

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1821709';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$sql = "SELECT * FROM Tb1";
$row = mysqli_query($conn, $sql);

echo "<?xml version='1.0' encoding='UTF-8'?>
<data>";

while ($item = mysqli_fetch_object($row)) {
    echo "<item>
    <DeltaV>$item->DeltaV</DeltaV>
    <System>$item->System</System>
    <Name>$item->Name</Name>
    <Orbit>$item->Orbit</Orbit>
    </item>";
}

echo "</data>";
