<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://xmmidact.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $DeltaV = $data->getElementsByTagName("DeltaV")->item(0)->nodeValue;
    $System = $data->getElementsByTagName("System")->item(0)->nodeValue;
    $Name = $data->getElementsByTagName("Name")->item(0)->nodeValue;
    $Orbit = $data->getElementsByTagName("Orbit")->item(0)->nodeValue;

    echo "
    <ul>
    <li>DeltaV: <strong>$DeltaV</strong></li>
    <li>System: <strong>$System</strong></li>
    <li>Name: <strong>$Name</strong></li>
    <li>Orbit: <strong>$Orbit</strong></li>
    </ul>";
}
?>
