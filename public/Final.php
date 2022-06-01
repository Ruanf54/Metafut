<?php require_once "../src/view/header_nav.php";

if(isset($_POST['v'])) {
    $timesV = $_POST['v'];
} else{
    $timesV = null;
}
if(isset($_POST['v2'])) {
    $timesV2 = $_POST['v2'];
} else{
    $timesV2 = null;
}
if (isset($_POST['s'])) {
    $s = $_POST['s'];
} else {
    $s = null;
}
if (isset($_POST['s2'])) {
    $s2 = $_POST['s2'];
} else {
    $s2 = null;
}

    if ($timesV > $timesV2) {
        $p2 = random_int(0,8);
        $p = random_int(0,3);
        $b = true;
    } else if ($timesV < $timesV2) {
        $p2 = random_int(0,4);
        $p = random_int(0,8);
        $b = false;
    } else {
        $p = random_int(0,4);
        $p2 = random_int(0,4);
    }
    //echo ($p);
    //echo ($p2);
    //var_dump ($s);
?>
    <div class="login-center">
    <form method="post" action="Inicio.php">
        <h1 style="color:aliceblue">RESULTADO:</h1>
        <br><br>
        <p> <h2 style="color:aliceblue">
        TIME 1  -  TIME 2 </h2>
        <h2 style="color:aliceblue">
        <?= $p ?>  -  <?= $p2?>
        </h2></p>
        <br>
        <h2 style="color:aliceblue"> PARABÉNS <?= $s ?>  </h2>
        <div class="row">
            <button type="submit" class="btn btn-success ">VOCÊ QUER IR NOVAMENTE?</button>
        </div>
    </div>
    </form>    
</body>
  </html>