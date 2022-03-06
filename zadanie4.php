<form action="" method="get">
    A:<input type="text" name="a">
    B:<input type="text" name="b">
    C:<input type="text" name="c"><br>
    D:<input type="text" name="d">
    E:<input type="text" name="e">
    F:<input type="text" name="f"><br>
    G:<input type="text" name="g">
    H:<input type="text" name="h">
    I:<input type="text" name="i">
    <input name="sub" type="submit" value="przeslij">
    <?php
    $Macierz;
    $A=$_GET['a'];
    $B=$_GET['b'];
    $C=$_GET['c'];
    $D=$_GET['d'];
    $E=$_GET['e'];
    $F=$_GET['f'];
    $G=$_GET['g'];
    $H=$_GET['h'];
    $I=$_GET['i'];
    $Macierz= ($A*$E*$I)+($B*$F*$G)+($C*$D*$H)-(($C*$E*$G)+($A*$F*$H)+($B*$D*$I));
    echo "wyznacznik: $Macierz";
    ?>