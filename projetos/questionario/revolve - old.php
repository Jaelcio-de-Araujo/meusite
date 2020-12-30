<!DOCTYPE html>
<html lang="pt-br">
    <head>
      	<meta charset="utf-8">
      	<meta name="description" content="Questionario">
        <meta name="author" content="Jaelcio de Araujo">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="icon" href="favicon.ico"/></link>
        <title>Questionario -  Grupo Inep</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
        <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet" media="screen"></link>
        <!-- Abertura do JavaScript -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/npm.js"></script>
        
        <!-- Final dos Scripts -->
    </head>
        <body>
        <style>

        body{
        background-color:#F0F0F0;
        background-repeat: no-repeat;
        background-size: 100%;
        }
        h2{
            color: #000000;
            
}
#pergunta{
    background-color: #006BFF;
    color: FFFFFF;
}
</style>
     <div class="container">


<?php

/**
 * @author Jaelcio de Araujo
 * @copyright 2017
 */
echo "<h2>Resultado do Teste:</h2><br/>";


?>


<?php
//Pegando todos os dados e colocando num arrey
$opcoes = array(
0 => $_GET['nome'],
1 => $_POST['opcao'],
2 => $_POST['opcao2'],
3 => $_POST['opcao3'],
4 => $_POST['opcao4'],
5 => $_POST['opcao5'],
6 => $_POST['opcao6'],
7 => $_POST['opcao7'],
8 => $_POST['opcao8'],
9 => $_POST['opcao9'],
10 => $_POST['opcao10'],
0 => $_POST['turma'],
);
$total = array_sum($opcoes);
?>
<p><b>Rendimento Total do Instrutor:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width:  <?php echo $total."%" ?>;">
     <?php echo $total."%" ?>
  </div>
</div>
<p><b>Didatica:</b></p>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="84" aria-valuemax="100" style="min-width: 2em; width: 87%;">
    80%
  </div>
</div>
</link>



</div>
</body>
</html>