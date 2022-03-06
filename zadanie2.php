<form method="POST" action="">
    kwota:<input name="kwota"></input><br>
    podatek:<input name="podatek"></input><br>
    <button type="submit" name="licz">licz</button>
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