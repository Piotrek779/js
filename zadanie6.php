<form action="" method="get">
    Liczba: <br>
    <input type="text" name="ml"><br>
    A:<input type="text" name="a">
    B:<input type="text" name="b"><br>
    C:<input type="text" name="c">
    D:<input type="text" name="d">
    <input name="sub" type="submit" value="przeslij mordo">
</form>

<?php

    $m=$_GET['ml'];
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $d=$_GET['d'];

    $w1;
    $w2;
    $w3;
    $w4;

    $w1=$m*$a;
    $w2=$m*$b;
    $w3=$m*$c;
    $w4=$m*$d;

echo "$w1 $w2 $w3 $w4";
?>