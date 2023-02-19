<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cursos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url(); ?>/assets/css/style.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?=base_url(); ?>/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?=base_url(); ?>/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url(); ?>/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?=base_url(); ?>/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <img src="<?=base_url(); ?>/assets/img/logoIF.png" width="240" height="260" alt="If Baiano"/>
            </div>

            <ul class="nav">
            <li>
            <a href="<?= base_url('Pendencia/inicio') ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Início</p>
                    </a>
                </li>
                <li>
                <a href="<?= base_url('pendencia/index') ?>">
                        <i class="pe-7s-user"></i>
                        <p>Cadastrar Pendência</p>
                    </a>
                </li>

            </li>
            </ul>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
        
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Pendências
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Pendência em Aberto</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Pendências Resolvidas</a></li>                   
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Sair</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">

                <!-- Alerta editar Curso --->
            <?php if($this->session->flashdata("success")) : ?>
                        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
                        <?php endif ?>
                        <?php if($this->session->flashdata("danger")) : ?>
                        <p class="alert alert-danger"><?= $this->session->flashdata("danger")?></p>
            <?php endif ?>
        <!-- Final alerta editar Curso --->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cursos Cadastrados</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Cursos</th>
                                        </thead>
                                        <tbody>
                                <?php foreach ($curso as $cur) : ?>
                                    <tr>
                                    <td><?= $cur['nomecurso'] ?></td> 

                                     <td class="text-center">

                                        <button type="button" data-toggle="modal" data-target="#ModalEditaCurso"
                                        data-whateverid="<?php echo $cur['idcurso'] ?>"
                                        data-whatevernome="<?php echo $cur['nomecurso'] ?>"
                                        class="btn btn-success"> Editar </button>   
                                    
                                    </td>                                
                                    </tr>
                                <?php endforeach ?>                  
                                    </tbody>
                                </table>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Início
                            </a>
                        </li>
                        <li>
                            <a href="ttps://www.ifbaiano.edu.br/unidades/guanambi/">
                                Página If Baiano
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.ifbaiano.edu.br">IF Baiano</a>
                </p>
            </div>
        </footer>


    </div>
</div>



        <!-- Modal Para editar Curso --->
<div class="modal fade" id="ModalEditaCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<form action="<?= base_url() ?>Curso/editar"  method="post">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="title">Editar Curso</h4>
        
      </div>
      <div class="modal-body">

            <div class="form-group">
            <input type="hidden" name="idcurso" id="recipient-id">

                <label for="recipientname" class="col-form-label">Curso</label>
                <input type="text" class="form-control" name="curso" id="recipient-name">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar

     </div>
    </div>
    
</form>

</div>
</div>
<!-- Final Modal Para editar Curso --->


</body>

    <!--   Core JS Files   -->
    <script src="<?=base_url(); ?>/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?=base_url(); ?>/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=base_url(); ?>/assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?=base_url(); ?>/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?=base_url(); ?>/assets/js/demo.js"></script>

    <script type="text/javascript">

            $('#ModalEditaCurso').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipientid = button.data('whateverid')
            var recipientnome = button.data('whatevernome')
            // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipientid)
            modal.find('#recipient-id').val(recipientid)
            modal.find('#recipient-name').val(recipientnome)
            })
    </script>


</html>
