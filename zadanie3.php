<form action="" method="get">
    A:<input type="text" name="a">
    B:<input type="text" name="b"><br>
    C:<input type="text" name="c">
    D:<input type="text" name="d">
    <input name="sub" type="submit" value="przeslij">
    <?php
    $Macierz;
    $A=$_GET['a'];
    $B=$_GET['b'];
    $C=$_GET['c'];
    $D=$_GET['d'];
    $Macierz= ($A*$C) - ($B*$D);
    echo "wyznacznik: $Macierz";
    ?>