<!-- Partes do Site -->
<?php include 	'../header/header.php';?>
<!-- ============================ -->

<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/js/bootstrap.min.js" rel="stylesheet" media="screen">
<!-- Final do Boostrap -->


<!-- Abertura do JavaScript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/holder.min.js"></script>
<script src="../bootstrap/js/viewport-bug-workaround.js"></script>
<!-- Final do JavaScript -->

<!-- CSS de Arranjo -->
<link href="../bootstrap/css/carousel.css" rel="stylesheet">
<link href="../bootstrap/css/jumbotron.css" rel="stylesheet">
<!-- ============================ -->

<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"><img src="../img/b.ico" width="25"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li class="active"><a href="projetos.php">Projetos</a></li>
                        <li><a href="contato.php">Contato</a></li>

                    </ul>
                    
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- FINAL DO NAVBAR
================================================== -->

<!-- JUMBROTRON DO INICIO DO SITE -->
<header>
    <div class="jumbotron">
        <div class="container">
            <br/>
            <h1>Projetos</h1>
            <p>Aqui você pode baixar os arquivos de meus projetos.</p>
        </div>
    </div>
</header>
<!-- ============================ -->



<!-- AREA DE DOWLOADS DE SISTEMAS CRIADOS
================================================== -->

<div class="container marketing">
    <hgroup>
    <h2>Galeria de Projetos</h2>
        <h5>Todos os sistemas listados aqui podem ser baixados gratuitamente, sem complicação nem cadastros.</h5>
    </hgroup>
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="../img/code2.png" width="140" height="140">
            <h4>Contador de clicks</h4>
            <p>Um contador cliques bem simples para você usar em seu sistema.</p>
            <a href="projetos/contador.zip" class="btn btn-default"><span class="glyphicon glyphicon-cloud-download"></span> Download</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="../img/code2.png" width="140" height="140">
            <h4>Classe de Conexão com DB</h4>
            <p>Baixe um classe php para conexão com banco de dados usando PDO.</p>
            <a href="projetos/conn.zip" class="btn btn-default"><span class="glyphicon glyphicon-cloud-download"></span> Download</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle " src="../img/code2.png" width="140" height="140">
            <h4>Página de Códigos</h4>
            <p>Uma páagina para uso em aulas, onde c código gerado aparce ja formatado, assim melhorando a experiencia do aluno em contato com PHP.</p>
            <a href="projetos/codigo.zip" class="btn btn-default"><span class="glyphicon glyphicon-cloud-download"></span> Download</a>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <div class="row">
            <div class="col-lg-4">
            <img class="img-circle" src="../img/code2.png" width="140" height="140">
            <h4>Envio de E-mails</h4>
            <p>Um pequeno script para envio de email, usando a classe <code>MAIL()</code>em php.</p>
            <a href="projetos/email.zip" class="btn btn-default"><span class="glyphicon glyphicon-cloud-download"></span> Download</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="../img/code2.png" width="140" height="140">
            <h4>Questionário em PHP</h4>
            <p>Um pequeno script para criação de questionario web, pode ser usado na elaboração de provas. <code>Quiz</code>em php.</p>
            <a href="../projetos/questionario/" class="btn btn-default"><span class="glyphicon glyphicon-cloud-download"></span> Download</a>
        </div>
        </div><!-- /.row -->
    <!-- ============================ -->
<br>
<br>

<div class="container">
<div class="fb-comments" data-href="http://jaelcio.com.br/" data-numposts="5" data-width=""></div>
</div>
</div>

<!-- Partes do Site -->
<?php require_once '../footer/footer.php';?>
<!-- ============================ -->
