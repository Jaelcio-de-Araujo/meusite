<?php
session_start(); //COMANDO QUE DA INICIO A SESSÃO PARA VALIDAÇÃO DE LOGIN E SENHA.
?>

<!DOCTYPE html>
        <!-- FUNÇÕES JAVASCRIPT PARA REDIRECIONAMENTO EM CASO DE LOGIN CORRETO OU ERRADO -->

        <script type="text/javascript">
            function loginsuccessfully() {
                setTimeout("window.location='media.php'", 1000);
            }
            function loginfailed() {
                setTimeout("window.location='erro.php'", 1000);
            }
        </script>
        <!-- FIM DO SCRIPT -->

        <?php
        $nome 		=            @$_POST['nome'];
        $senha 		=            @$_POST['senha'];
		$professor  =            @$_POST['professor'];

        //CONEXAO LOCAL AO BANCO DE DADOS.
        require_once("conn_modular.php");
       

			$sql2 = mysql_query("SELECT * FROM tab_usuario WHERE nome='$nome' AND senha='$senha'");
            $row2 = mysql_num_rows($sql2);
            if ($row2 > 0){
            $_SESSION['nome']     = @$_POST['nome'];
            $_SESSION['senha']    = @$_POST['senha'];
            echo "<h2>Você foi autenticado com Sucesso.<h2>";
            echo "<script>loginsuccessfully()</script>";
			$_SESSION['professor'] = @$_POST['professor'];

            } else {
            echo "<h2>Nome de Usuario ou senha Invalidos.</h2>";
            echo "<script>loginfailed()</script>";
            }
        ?>
    </head>
</html>
</body>
</html>
