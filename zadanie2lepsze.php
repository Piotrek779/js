<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="container2">
    <nav class="blue">

<form method="POST" action="">
<li> <p style="color:white;">kwota:</p><input name="kwota"></input><br> </li>
  <li>  <p style="color:white;">podatek:</p><input name="podatek"></input><br> </li>
  <li> <p style="color:black;"> <button type="submit" name="licz">licz</button> </p> </li>
</form>
<?php
if(isset($_POST['licz'])){
    $kwota = $_POST['kwota'];
    $podatek = $_POST['podatek'];
    $suma = $kwota * $podatek;

    $podatek = $podatek /100;
    $suma = $kwota * $podatek;

    echo "kwota netto: ".$suma;
}
?>
</nav>
</div>
</body>