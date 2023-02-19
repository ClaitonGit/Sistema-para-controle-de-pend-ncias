<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Alunos Pendentes</title>

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
                <a href="<?= base_url('index') ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li>
                <a href="<?= base_url('pendencia/index') ?>">
                        <i class="pe-7s-user"></i>
                        <p>Cadastrar Pendêcia</p>
                    </a>
                </li>

            </li>
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
                                <li><a href="#">Pendêcia em Aberto</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Pendêcia Resolvidas</a></li>                   
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Alunos Pendentes</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Matricula</th>
                                        <th>Aluno</th>
                                        <th>Data</th>
                                    	<th>Curso</th>
                                        <th>Semestre</th>
                                        <th>Status</th>
                                        <th>Pendêcia</th>
                                        <th>Descriçao</th>
                                    </thead>

                                   
                                    <?php
                                    foreach ($pendencia as $pen): ?>
                                    
                                  <tr>
                                  <td><?=$pen['nmatriculaf'] ?></td>
                              
                                  <td> <a href="<?= base_url(''); ?>" class="btn btn-danger"> Alterar </a> </td> 
                                  </tr>

                                  <?php endforeach ?>                       
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
                                Inicio
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


</html>
