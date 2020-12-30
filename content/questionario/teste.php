<?php
require_once("conexao.php");
		
				/* check connection */
		if (mysqli_connect_errno()) {
			printf("Conexao Falhou: %s\n", mysqli_connect_error());
			exit();
		}
		// Selecionando dados da pergunta 1
		$query = "SELECT * FROM quiz WHERE professor='Jaelcio'";
		$result = mysqli_query($conn, $query);
		
			/* Somando Valores da pergunta 1 */
			while ($row = mysqli_fetch_array($result)) {
			$num =    mysqli_num_rows($result);
				$p1 = $row['pergunta1'];
			}	
			

			/* f */
			mysqli_free_result($result);
			echo $num;
		?>