<!-- Partes do Site -->
<?php require_once 	'../header/header.php';?>
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
<script src="../bootstrap/js/jquery.bsAlerts.js"></script>
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
                        <li><a href="projetos.php">Projetos</a></li>
                        <li  class="active"><a href="contato.php">Contato</a></li>
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
            <h1>Contato</h1>
            <p>Entre em contato comigo através do formulário de contato.</p>
        </div>
    </div>
</header>
<!-- ============================ -->

<!-- FORMULARIO DE CONTATO
================================================== -->
<div class="container">
    <h2>Formuário de Contato</h2>
    <form class="form-horizontal" data-toggle="validator" name="ajax_form" id="ajax_form" method="post" autocomplete="off" action="email.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="txtnome">Nome:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="txtnome" name="nome" placeholder="Digite seu nome aqui." required>
                            <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="txtemail">E-mail:</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" id="txtemail" name="email" placeholder="Digite seu e-mail aqui."
                       data-error="Por favor, informe um e-mail correto." required>
                             <div class="help-block with-errors"></div>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="txttel">Telefone:</label>
            <div class="col-sm-7">
                <input type="tel" class="form-control" id="txttel" name="telefone" placeholder="Digite seu telefone." required>
                <span class="help-block">Mínimo de oito (8) digitos.</span>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Observações:</label>
            <div class="col-sm-7">
                <textarea class="form-control" rows="5" id="comment" name="observacoes" placeholder="Digite informações complementares." required></textarea>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div data-alerts="alerts" data-titles="{'success': '<em>success!</em>'}" data-ids="myid" data-fade="4000"></div>
                <button type="submit" id="warn-me" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Resetar</button>
            </div>
        </div>
    </form>
</div>

<!-- ============FINAL DO FORMULARIO DE CONIATO=============== -->




<!-- ============SCRIPTS PARA ENVIO VIA AJAX E MENSAGEM DE SUCESSO AO ENVIAR=============== -->


<script>

    $("#ajax_form").submit(function() {
        $(document).trigger("add-alerts", [
            {
                'message': "Mensagem enviada com sucesso.",
                'priority': 'success'
            }
        ]);
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#ajax_form').submit(function(){
            var dados = jQuery( this ).serialize();

            jQuery.ajax({
                type: "POST",
                data: dados,
                url: "email.php",
                success: function()
                {
                    document.ajax_form.reset();

                }
            });

            return false;
        });
    }); */
</script>

<!-- ============================ -->

<!-- Partes do Site -->
<?php include 	'../footer/footer.php';?>
<!-- ============================ -->
