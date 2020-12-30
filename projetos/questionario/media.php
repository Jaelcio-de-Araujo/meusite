<?php
session_start();
?>
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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="print">
        <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet" media="print">
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
		/*******************************
		 *								*
		 *	AREA DE CONEXÃO DE DADOS	*
		 *	SOMA DOS DADOS				*
		 *								*
		********************************/
		$professor = $_SESSION['professor'];
		require_once("conexao.php");
		
				/* check connection */
		if (mysqli_connect_errno()) {
			printf("Conexao Falhou: %s\n", mysqli_connect_error());
			exit();
		}
		// Selecionando dados da pergunta 1
		$query = "SELECT SUM(pergunta1) AS pergunta1 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 1 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p1 = $row['pergunta1'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}// Calculo de linha pergunta1
		$query = "SELECT pergunta1 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 1 */
		while ($row = mysqli_fetch_array($result)) {
		$num =    mysqli_num_rows($result);
			}	
			
		// Selecionando dados da pergunta2
		$query = "SELECT SUM(pergunta2) AS pergunta2 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 2 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p2 = $row['pergunta2'];
			}	
			

			/* f */
			mysqli_free_result($result);
		
		}// Calculo de linha pergunta2
		$query = "SELECT pergunta2 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 2 */
		while ($row = mysqli_fetch_array($result)) {
		$num2 =    mysqli_num_rows($result);
			}
		
		
		
		// Selecionando dados da pergunta3
		$query = "SELECT SUM(pergunta3) AS pergunta3 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 3 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p3 = $row['pergunta3'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}
		// Calculo de linha pergunta3
		$query = "SELECT pergunta3 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		
		/* Somando Valores da pergunta 4 */
		while ($row = mysqli_fetch_array($result)) {
		$num3 =    mysqli_num_rows($result);
			}
		
		
		
		// Selecionando dados da pergunta4
		$query = "SELECT SUM(pergunta4) AS pergunta4 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 4 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p4 = $row['pergunta4'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}
		// Calculo de linha pergunta4
		$query = "SELECT pergunta4 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 4 */
		while ($row = mysqli_fetch_array($result)) {
		$num4 =    mysqli_num_rows($result);
			}
		
		// Selecionando dados da pergunta5
		$query = "SELECT SUM(pergunta5) AS pergunta5 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 5 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p5 = $row['pergunta5'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}
		// Calculo de linha pergunta5
		$query = "SELECT pergunta5 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 5 */
		while ($row = mysqli_fetch_array($result)) {
		$num5 =    mysqli_num_rows($result);
			}
		
		
		// Selecionando dados da pergunta6
		$query = "SELECT SUM(pergunta6) AS pergunta6 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 6 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p6 = $row['pergunta6'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}
		// Calculo de linha pergunta6
		$query = "SELECT pergunta6 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 6 */
		while ($row = mysqli_fetch_array($result)) {
		$num6 =    mysqli_num_rows($result);
			}
			
		// Selecionando dados da pergunta7
		$query = "SELECT SUM(pergunta7) AS pergunta7 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 7 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p7 = $row['pergunta7'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}
		// Calculo de linha pergunta7
		$query = "SELECT pergunta7 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 7 */
		while ($row = mysqli_fetch_array($result)) {
		$num7 =    mysqli_num_rows($result);
			}
		
		// Selecionando dados da pergunta8
		$query = "SELECT SUM(pergunta8) AS pergunta8 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 8 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p8 = $row['pergunta8'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}
		// Calculo de linha pergunta8
		$query = "SELECT pergunta8 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 8 */
		while ($row = mysqli_fetch_array($result)) {
		$num8 =    mysqli_num_rows($result);
			}
			
		// Selecionando dados da pergunta9
		$query = "SELECT SUM(pergunta9) AS pergunta9 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 9 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p9 = $row['pergunta9'];
			}	
			

			/* f */
			mysqli_free_result($result);
		}
		// Calculo de linha pergunta9
		$query = "SELECT pergunta9 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 9 */
		while ($row = mysqli_fetch_array($result)) {
		$num9 =    mysqli_num_rows($result);
			}
		
		// Selecionando dados da pergunta 10
		$query = "SELECT SUM(pergunta10) AS pergunta10 FROM quiz WHERE professor='$professor'";
		if ($result = mysqli_query($conn, $query)) {
			/* Somando Valores da pergunta 10 */
			while ($row = mysqli_fetch_array($result)) {
			
				$p10 = $row['pergunta10'];
			}	
			

			/* f */
			mysqli_free_result($result);
			
		}
		// Calculo de linha pergunta 10
		$query = "SELECT pergunta10 FROM quiz WHERE professor='$professor'";
		$result = mysqli_query($conn, $query);
		/* Somando Valores da pergunta 10 */
		while ($row = mysqli_fetch_array($result)) {
		$num10 =    mysqli_num_rows($result);
			}
	 ?>
    <h3>Media Geral do Instrutor <u><b><?php echo $_SESSION['professor']; ?></b></u>.</h3>

    <br />
<p><b>Didatica do Professor:</b></p>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width:  <?php echo round($p1/$num)."%" ?>;">
     <?php echo round($p1/$num)."%" ?>
  </div>
</div>
<p><b>Higiene do Professor:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width: <?php echo round($p2/$num2)."%" ?> ;">
  <?php echo round($p2/$num2)."%" ?>
  </div>
</div>
<p><b>Postura do Professor:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width: <?php echo round($p3/$num3)."%" ?>;">
  <?php echo round($p3/$num3)."%" ?>
  </div>
</div>
<p><b>Conhecimento do Professor:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width: <?php echo round($p4/$num4)."%" ?>;">
  <?php echo round($p4/$num4)."%" ?>
  </div>
</div>
<p><b>Pontualidade do Professor:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width:  <?php echo round($p5/$num5)."%" ?>;">
  <?php echo round($p5/$num5)."%" ?>
  </div>
</div>
<p><b>Uso da Apostila:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width: <?php echo round($p6/$num6)."%" ?>;">
  <?php echo round($p6/$num6)."%" ?>
  </div>
</div>
<p><b>Aprendizado em Sala:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width: <?php echo round($p7/$num7)."%" ?>;">
  <?php echo round($p7/$num7)."%" ?>
  </div>
</div>
<p><b>Estrutura em sala de aula:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width:  <?php echo round($p8/$num8)."%" ?>;">
 <?php echo round($p8/$num8)."%" ?>
  </div>
</div>
<p><b>Qualidade da Apostila:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width: <?php echo round($p9/$num9)."%" ?>;">
  <?php echo round($p9/$num9)."%" ?>
  </div>
</div>
<p><b>Dados Gerais da Escola:</b></p>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width:  <?php echo round($p10/$num10)."%" ?>;">
  <?php echo round($p10/$num10)."%" ?>
  </div>
</div>
<p><b>Media Geral do Professor:</b></p>
<?php 

//Area de Calculo Geral da Media do Professor.
$linhas = array($num1, $num2 ,$num3, $num4 , $num5 , $num6 ,$num7 , $num8, $num9 , $num10);
$linhas2 = array_sum($linhas);
$geral = array($p1, $p2 ,$p3, $p4 , $p5 , $p6 ,$p7 , $p8, $p9 , $p10);
$geral2 = array_sum($geral);
?>
<div class="progress">

  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="100" style="min-width: 2em; width:  <?php echo round($geral2 / $linhas2 * 10)."%" ?>;">
  <?php echo round($geral2 / $linhas2 * 10)."%" ?>
  </div>
</div>
<p><a href="#" class="btn btn-primary btn-danger" onclick="window.print();"><span class="glyphicon glyphicon-print"></span> Imprimir Relatório</a></p>
</div>

</body>
</html>