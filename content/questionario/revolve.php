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
</style>
     <div class="container">
<?php
$opcoes = array(
1 =>  $_POST['opcao'],
2 =>  $_POST['opcao2'],
3 =>  $_POST['opcao3'],
4 =>  $_POST['opcao4'],
5 =>  $_POST['opcao5'],
6 =>  $_POST['opcao6'],
7 =>  $_POST['opcao7'],
8 =>  $_POST['opcao8'],
9 =>  $_POST['opcao9'],
10 => $_POST['opcao10']);


$info = array(
0 => $_POST['professor'],
11 => $_POST['data_quiz'],
12 => $_POST['turma']);

$total = array_sum($opcoes);
require_once "conexao.php";
$sql = "INSERT INTO quiz (professor, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9,pergunta10, data_quiz, turma)
                  VALUES ('$info[0]', '$opcoes[1]', '$opcoes[2]', '$opcoes[3]', '$opcoes[4]', '$opcoes[5]', '$opcoes[6]', '$opcoes[7]', '$opcoes[8]', '$opcoes[9]', '$opcoes[10]' , '$info[11]','$info[12]')";


if ($conn->query($sql) === TRUE) {
    echo "<h3>Avaliacao Realizada com sucesso.</h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$conn->close();


?>
<p><b>Rendimento Total do Instrutor:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width:  <?php echo $total."%" ?>;">
     <?php echo $total."%" ?>
  </div>
</div>
<p><b><a href="obrigado.php" class="btn btn-danger  btn-default">Sair do Teste</a></p>
</div>
</body>
</html>