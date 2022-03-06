<form method="post" action="">
Podaj imie,nazwisko:
<input type="text" name="userName">
<input type="submit">

<?php

$userName = $_POST['userName'];

$spacePos = strpos($userName,' ');

$forename = substr($userName,0,$spacePos);

echo 'Imie: '.$forename.'<br>';

$length = strlen($userName);

$surnameLength = $length-$spacePos;

$surname = substr($userName,$spacePos+1);

echo 'Nazwisko: '.$surname;

?>