<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php if($this->session->userdata("logged_user")) : ?>  

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cadastro de Pendência</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url(); ?>/assets/css/bootstrap.min2.css" rel="stylesheet" />

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
     

        <!-- Inicio do Formulario --->

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
                    <a href="<?= base_url('/') ?>">
                            <i class="pe-7s-user"></i>
                            <p>Cadastrar Pendência</p>
                        </a>
                    </li>

                    <li>
                    <a href="<?= base_url('Pendencia/listando') ?>">
                            <i class="pe-7s-note2"></i>
                            <p>Alunos Pendentes</p>
                        </a>
                    </li>
    
                    <li>
                    <a href="<?= base_url('Pendencia/listandoHis') ?>">
                            <i class="pe-7s-bell"></i>
                            <p>Histórico</p>
                        </a>
                    </li>

                    <li>
                    <a href="<?= base_url('Pendencia/funcoesedita') ?>">
                            <i class="pe-7s-bell"></i>
                            <p>Editar e excluir</p>
                        </a>
                    </li>
    
                </li>
                </ul>
            </div>
        </div>

        
        <!-- Final do Formulario --->
        
    
     <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
        
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Inserir Curso/Semestre
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                              <li><a href="" data-toggle="modal" data-target="#ModalCurso" data-whatever="@mdo">Inserir Curso</a></li>
                                <li class="divider"></li>
                                <li><a href="" data-toggle="modal" data-target="#ModalSemestre" data-whatever="@mdo">Inserir Semestre</a></li>
                              </ul>
                        </li>
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										 Pendências
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?= base_url('Pendencia/listando') ?>">Pendência em aberto</a></li>
                                <li class="divider"></li>
                                <li> <a href="<?= base_url('Pendencia/listandoHis') ?>">Pendências Resolvidas</a></li>
                              </ul>
                        </li>
                        
                        <li>
                            
                            <a class="navbar-brand" href="<?= base_url('Login/logout') ?>">Sair</a>
                         
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

 <!-- Alerta do Formulario --->
       
        <?php if($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if($this->session->flashdata("danger")) : ?>
            <div class="alert alert-danger" role="alert">
          Aluno Já Exitente <a href="<?=base_url(); ?>" class="alert-link">Clique aqui para prosseguir!</a>.
          </div>
        <?php endif ?>
<!-- Alerta do Formulario --->

                         <!-- Inicio do Formulario --->
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadastrar Aluno</h4>
                            </div>
                            <div class="content">
                               
                                <form name="form" action="<?= base_url() ?>Aluno/cadastrar" method="post">
                                    <div class="row">
                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>N° Matrícula</label>
                                                <input type="number" class="form-control" name="matricula" placeholder="Matricula" id="recipient-name" required>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nome do Aluno</label>
                                                <input type="tex" class="form-control" name="nomeAluno" placeholder="Nome do aluno" id="recipient-name" required>
                                            </div>
                                        </div>
                                        </div>

                                    <button type="submit"  class="btn btn-success btn-fill pull-right" >Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- Final do Formulario --->
 <!-- Inicio dos opcionais --->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Escolha as Opções</h4>
                            </div>
                            <div class="content">
                            
                            <a  href="<?= base_url('Pendencia/listando') ?>"  class="btn btn-success"> Pendências Em Aberto </a> </td>

                            <a href="" data-toggle="modal" data-target="#ModalBusca" data-whatever="@mdo" class="btn btn-success"> Buscar Aluno Pendente </a> </td>
                            <a href="<?= base_url('Pendencia/listando') ?>" class="btn btn-success"> Resolver pendências </a> </td>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Final dos opcionais --->
           
            <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img  src="<?=base_url(); ?>assets/img/if1.jpg" width="240" height="120" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     
                                    <img class="avatar border-gray" src="<?=base_url(); ?>assets/img/iflogo.png"  alt="..."/>

                                      <h4 class="title">Bem vindo ao controle de Pendências<br />
                                         <small>CAE</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> Coordenação de Assuntos Estudantis  <br>              
                                </p>
                        </div>
                    </div>
                   

                </div>
               
            </div>
        </div>
        
    </div>
    

       
<!-- Rodapé --->
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
                            <a href="https://www.ifbaiano.edu.br/unidades/guanambi/">
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


<!-- Modal de Aluno --->

<div class="modal fade" id="ModalAluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<form  action="<?= base_url() ?>Aluno/cadastrar" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="title">Cadastrar novo aluno</h4>
        
      </div>
      <div class="modal-body">
      
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">N° Matricula</label>
            <input type="tex" class="form-control" name="matricula" placeholder="nome do aluno" id="recipient-name" required>

            <label for="recipient-name" class="col-form-label">Nome do Aluno</label>
            <input type="text" class="form-control" name="nomeAluno" placeholder="nome do aluno" id="recipient-name" required>
          </div>

          <button type="submit" class="btn btn-success">Cadastrar</button>
         <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar

      </div>
    </div>
    
</form>

  </div>
</div>

<!-- Final do Modal de Aluno --->


<!-- Modal de Curso --->

<div class="modal fade" id="ModalCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<form  action="<?= base_url() ?>Curso/cadastrar" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="title">Cadastrar novo curso</h4>
        
      </div>
      <div class="modal-body">
      
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">CURSO</label>
            <input type="text" class="form-control" name="curso" placeholder="nome do curso" id="recipient-name" required>
          </div>

          <button type="submit" class="btn btn-success">Cadastrar</button>
         <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar

      </div>
    </div>
    
</form>

  </div>
</div>
<!-- Final do Modal de Curso --->

<!-- Modal de Semestre --->

<div class="modal fade" id="ModalSemestre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">

<?php if($this->session->flashdata("success")) : ?>
    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    <?php endif ?>

    <?php if($this->session->flashdata("danger")) : ?>
    <p class="alert alert-danger"><?= $this->session->flashdata("danger")?></p>
    <?php endif ?>

<form  action="<?= base_url() ?>Semestre/cadastrar" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="title">Cadastrar novo semestre</h4>
        
      </div>
      <div class="modal-body">
      
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Semestre</label>
            <input type="text" class="form-control" name="semestre" placeholder="nome do curso" id="recipient-name" required>
          </div>

          <button type="submit" class="btn btn-success">Cadastrar</button>
         <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar

      </div>
    </div>
    
</form>

  </div>
</div>
<!-- Final do Modal de Semestre --->



<!--Inicio Modal Buscar Pendencia -->
<div class="modal fade" id="ModalBusca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<form action="<?= base_url() ?>Pendencia/Busca"  method="post">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="title">Buscar Pendência</h4>
        
      </div>
      <div class="modal-body">

            <div class="form-group">
            <input type="hidden" name="idpendencia" id="recipient-id">

                <label for="recipientname" class="col-form-label">Informe o nome do aluno</label>
                <input type="text" class="form-control" name="pesquisarP" value=""  placeholder="Informe o nome"> </div>
            
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success">Buscar</button>
            <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar
            </div>

     </div>
   
    </div>
    
</form>

</div>
</div>
    
<!--Final Modal Buscar Pendencia -->


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



    <?php else : ?>
    <?php redirect("Login");
    ?>
    
<?php endif ?>

</html>