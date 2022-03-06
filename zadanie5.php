<form action=""method="get">
    A1:<input type="text" name="a1">
    B1:<input type="text" name="b1"><br>
    C1:<input type="text" name="c1">
    D1:<input type="text" name="d1">
    <br>
    ------------------------------------------------------------------
    <br>
    A2:<input type="text" name="a2">
    B2:<input type="text" name="b2"><br>
    C2:<input type="text" name="c2">
    D2:<input type="text" name="d2">
    <input name ="sub" type="submit" value="ok">
</form>
<?php
$A1=$_GET['a1'];
$B1=$_GET['b1'];
$C1=$_GET['c1'];
$D1=$_GET['d1'];
$A2=$_GET['a2'];
$B2=$_GET['b2'];
$C2=$_GET['c2'];
$D2=$_GET['d2'];
$s1; // s - suma czyli dodawanie
$s2;
$s3;
$s4;

$s1=$A1+$A2;
$s2=$B1+$B2;
$s3=$C1+$C2;
$s4=$D1+$D2;

$o1; //o - odejmowanie
$o2;
$o3;
$o4;

$o1=$A1-$A2;
$o2=$B1-$B2;
$o3=$C1-$C2;
$o4=$D1-$D2;

$m1; //m - mnozenie
$m2;
$m3;
$m4;

$m1=$A1*$A2;
$m2=$B1*$B2;
$m3=$C1*$C2;
$m4=$D1*$D2;

echo "Wyznacznik Dodawania: ";
echo "$s1 $s2 $s3 $s4"; 
echo "Wyznacznik Odejmowania: ";
echo "$o1 $o2 $o3 $o4"; 
echo "Wyznacznik Mnożenia: ";
echo "$m1 $m2 $m3 $m4";
?>