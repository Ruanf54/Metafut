<?php
 require_once "../src/view/header_nav.php"; ?>
<body style="background-color:black;">
</body>

<?php 

    if (isset($_GET['radio'])) {
        $radio = $_GET ['radio'];
    } else {
        $radio = "<meta http-equiv='refresh' content='2; url=../public/Erro.php' />";
    }

////////////////////////////////////////////////////////////////////////////
    //$times = null;

    if (isset($_GET['Premiere'])) {
        $times = $_GET['Premiere'];
    } else {
        $times = null;
    }
    ?>
    <form method="post" action="Simular.php">
        <div class="text-center">
    <h3 style="color:aliceblue">ESCOLHA O TiME 2</h3><br>
    <h2 style="color:aliceblue">TIME 1: <?= $times ?> </h2>
    </div>
           
    <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="City" value="Manchester City" required>
      <label class="form-check-label" for="Manchester City"> Manchester City </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Liverpool" value="Liverpool" >
      <label class="form-check-label" for="Liverpool"> Liverpool </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Chelsea" value="Chelsea" >
      <label class="form-check-label" for="Chelsea"> Chealsea </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Tottenham" value="Tottenham" >
      <label class="form-check-label" for="Tottenham"> Tottenham </label>
        </div>
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Arsenal" value="Arsenal" >
      <label class="form-check-label" for="Arsenal"> Arsenal </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="United" value="Mancheater United" >
      <label class="form-check-label" for="United"> Mancheater United </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="West Ham" value="West Ham" >
      <label class="form-check-label" for="West Ham"> West Ham</label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Leicerster City" value="Leicerster City" >
      <label class="form-check-label" for="Leicerster City"> Leicerster City </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Brighton" value="Brighton" >
      <label class="form-check-label" for="Brighton"> Brighton </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Wolver" value="Worver" >
      <label class="form-check-label" for="Wolver"> Wolver </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Newcastle" value="Newcastle" >
      <label class="form-check-label" for="Newcastle"> Newcastle </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Crystal Palace" value="Crystal Palace" >
      <label class="form-check-label" for="Crystal Palace"> Crystal Palace </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Brentford" value="Brentford" >
      <label class="form-check-label" for="Brentford"> Brentford </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Aston Villa" value="Aston Villa" >
      <label class="form-check-label" for="Aston Villa"> Aston Villa </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Southampton" value="Southmpton" >
      <label class="form-check-label" for="Southampton"> Southampton </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Everton" value="Everton" >
      <label class="form-check-label" for="Everton"> Everton </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Leeds" value="Leeds" >
      <label class="form-check-label" for="Leeds"> Leeds </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Burnley" value="Burnley" >
      <label class="form-check-label" for="Burnley"> Burnley </label>
        </div>
        
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Waltford" value="Waltford" >
      <label class="form-check-label" for="Waltford"> Waltford </label>
        </div>
        
        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT2" id="Norwich" value="Norwich" >
      <label class="form-check-label" for="Norwich"> Norwich </label>
        </div>

        <div class="form-check">
      <input class="form-check-input" type="radio" name="PremiereT1" id="time1" value="<?= $times ?>" checked>
      <label class="form-check-label" for="Seu Time é: <?php $times ?>"> <?= $times ?> </label>
        </div> <br>
        <div class="row">
                    <input type="submit" class="btn btn-success col-3 offset-3" value="Enviar" />
                    &nbsp;
                    <input type="reset" class="btn btn-light col-3" value="Apagar" />
                </div>
         </form>

    





