<!DOCTYPE html>
<html lang="pt-br">
    <head>
      	<meta charset="utf-8">
      	<meta name="description" content="Questionario">
        <meta name="author" content="Jaelcio de Araujo">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="icon" href="img/favicon.ico"/></link>
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
            color: #FFFFFF;
            
}
#pergunta{
    background-color: #006BFF;
    color: FFFFFF;
}
</style>  
     <div class="container">
     <div class="jumbotron">
     <img src="img/logo.png" alt="logo">
  <h1>Avaliacao do Professor <?php echo $_GET['professor']; ?></h1>
  <p>Marque as questoes para sabermos como melhor atende-lo.</p>
  
</div>
        <form name="questionario" action="revolve.php" id="quest" method="post" autocomplete="off" >
         <input type="text" class="form-control" placeholder="Turma do aluno" aria-describedby="sizing-addon1" required="required" name="turma" autofocus>
    <br />
    <div class="panel panel-primary">
      <div class="panel-heading"><h4>1 - Seu professor Possui uma boa Didatica?</h4></div>
      <div class="panel-body">
      
         <label class="radio-inline"><input type="radio" value="10"  name="opcao"> Otimo</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao"> Boa</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao"> Media</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao"> Ruim</label>
      
      </div>
    </div>
    <br/>
         
    <div class="panel panel-primary">
      <div class="panel-heading"><h4>2 - Como é a Higiêne do professor?</h4></div>
      <div class="panel-body">
         <label class="radio-inline"><input type="radio" value="10"  name="opcao2"> Otimo</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao2"> Boa</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao2"> Media</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao2"> Ruim</label>
      </div>
    </div> 
       <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>3 - Como é a postura do seu professor?</h4></div>
      <div class="panel-body">
       <label class="radio-inline"><input type="radio" value="10"  name="opcao3"> Otimo</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao3"> Boa</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao3"> Media</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao3"> Ruim</label>
      
      </div>
    </div>
     <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>4 - Seu Professor domina o conteúdo ensinado em sala?</h4></div>
      <div class="panel-body">
        <label class="radio-inline"><input type="radio" value="10"  name="opcao4"> Sempre</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao4"> Quase Sempre</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao4"> As Vezes</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao4"> Nunca</label>
      
      </div>
    </div>  
    <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>5 - Seu Professor é pontual?</h4></div>
      <div class="panel-body">
       <label class="radio-inline"><input type="radio" value="10"  name="opcao5"> Sempre</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao5"> Quase Sempre</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao5"> As Vezes</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao5"> Nunca</label>
      
      </div>
    </div> 
    <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>6 - Seu Professor usa a apostila?</h4></div>
      <div class="panel-body">
        <label class="radio-inline"><input type="radio" value="10"  name="opcao6"> Sempre</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao6"> Quase Sempre</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao6"> As Vezes</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao6"> Nunca</label>
      
      </div>
    </div>
    <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>7 - Você sai da sala de aula com dúvidas?</h4></div>
      <div class="panel-body">
        <label class="radio-inline"><input type="radio" value="10"  name="opcao7"> Nunca</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao7"> Raramente</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao7"> As Vezes</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao7"> Sempre</label>
      
      </div>
    </div>          
      <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>8 - Como você considera a estrutura de sala de aula?</h4></div>
      <div class="panel-body">
        <label class="radio-inline"><input type="radio" value="10"  name="opcao8"> Otimo</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao8"> Boa</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao8"> Media</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao8"> Ruim</label>
      
      </div>
    </div>
    
    <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>9 - Como você considera sua apostila?</h4></div>
      <div class="panel-body">
         <label class="radio-inline"><input type="radio" value="10"  name="opcao9"> Otimo</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao9"> Boa</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao9"> Media</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao9"> Ruim</label>
      
      </div>
    </div> 
    <br/>
     <div class="panel panel-primary">
      <div class="panel-heading"><h4>10 - Como você considera a escola como um todo?</h4></div>
      <div class="panel-body">
        <label class="radio-inline"><input type="radio" value="10"  name="opcao10"> Otimo</label>
         <label class="radio-inline"><input type="radio" value="8"  name="opcao10"> Boa</label>
         <label class="radio-inline"><input type="radio" value="5"  name="opcao10"> Media</label>
         <label class="radio-inline"><input type="radio" value="0"  name="opcao10"> Ruim</label>
      
      </div>
    </div> 
    <div> 
       <button type="submit" class="btn btn-danger  btn-default">Enviar Feedback</button>
       <input type="hidden" name="professor" value="<?php echo $_GET['professor']; ?>">
       <input type="hidden" name="data_quiz" value="<?php date_default_timezone_set('America/Sao_Paulo');$date = date('d/m/y');echo $date;?>">
    </div> 
    </div> <!-- /container -->
</form>
    </body>
</html>