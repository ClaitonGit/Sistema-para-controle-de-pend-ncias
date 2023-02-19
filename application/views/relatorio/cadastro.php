<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cadastro de Pendêcia</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />

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
                            <p>Inicio</p>
                        </a>
                    </li>

                    <li>
                    <a href="<?= base_url('/') ?>">
                            <i class="pe-7s-user"></i>
                            <p>Cadastrar Pendêcia</p>
                        </a>
                    </li>

                    <li>
                    <a href="<?= base_url('Pendencia/indexBuscar') ?>">
                            <i class="pe-7s-note2"></i>
                            <p>Alunos Pendentes</p>
                        </a>
                    </li>
    

                    <li>
                        <a href="">
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
										Novo Aluno
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                              <li><a href="" data-toggle="modal" data-target="#ModalAluno" data-whatever="@mdo">Inserir Aluno</a></li>
                              </ul>
                        </li>

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
                                <li><a href="#">Pendência em aberto</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Pendência Resolvidas</a></li>
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

        <!-- Inicio do Formulario --->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadastro de Pendêcias</h4>
                            </div>
                            <div class="content">
                               
                                <form name="form" action="<?= base_url() ?>Pendencia/cadastrar" method="post">
                                    <div class="row">
                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>N° Matricula</label>
                                                <select class="form-control" name="idmatriculaf" id="exampleFormControlSelect1">
                                                    <option selected></option>

                                                    <?php
                                            $matricula = $this->db->get('aluno');
                                            foreach ($matricula->result() as $rs) {
                                                ?>
                                                <option value="<?php echo $rs->idaluno ?>"><?php echo $rs->nmatricula ?></option>
                                            <?php } ?>
                                
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nome do Aluno</label>
                                                <select class="form-control" name="idalunof" id="exampleFormControlSelect1">
                                                    <option selected></option>

                                                    <?php
                                            $aluno = $this->db->get('aluno');
                                            foreach ($aluno->result() as $rs) {
                                                ?>
                                                <option value="<?php echo $rs->idaluno ?>"><?php echo $rs->nome ?></option>
                                            <?php } ?>
                                
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Curso</label>
                                                <select class="form-control" name="idcurso" id="exampleFormControlSelect1">
                                                    <option selected></option>

                                                    <?php
                                            $curso = $this->db->get('curso');
                                            foreach ($curso->result() as $rs) {
                                                ?>
                                                <option value="<?php echo $rs->idcurso ?>"><?php echo $rs->nomecurso ?></option>
                                            <?php } ?>
                                
                                                  </select>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Semestre</label>
                                                <select class="form-control" name="idsemestre" id="exampleFormControlSelect1">
                                                <option selected></option>
                                                <?php
                                            $semestre = $this->db->get('semestre');
                                            foreach ($semestre->result() as $rs) {
                                                ?>
                                                <option value="<?php echo $rs->idsemestre ?>"><?php echo $rs->semestre ?></option>
                                            <?php } ?>

                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data</label>
                                                <input type="date" class="form-control" name="data" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pendêcia</label>
                                                <input type="text" class="form-control" name="pendencia" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Nivel</label>
                                                <select class="form-control" name="nivel" id="exampleFormControlSelect1">
                                                    <option selected></option>
                                                    <option>Leve</option>
                                                    <option>Medio</option>
                                                    <option>Grave</option>
                                                  </select>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descrição</label>
                                                <textarea rows="5" class="form-control" name="descricao" placeholder="Descreva a pendência" value="Mike"></textarea>
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

<!-- Rodapé --->
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
                            <a href="https://www.ifbaiano.edu.br/unidades/guanambi/">
                                Página If Baiano
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.ifbaiano.edu.br">IF Baiano</a>,Claiton ADS
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
            <input type="tex" class="form-control" name="matricula" placeholder="Numero da matricula" id="recipient-name" required>

            <label for="recipient-name" class="col-form-label">Nome do Aluno</label>
            <input type="text" class="form-control" name="nomeAluno" placeholder="Nome do aluno" id="recipient-name" required>
          </div>

          <button type="submit" class="btn btn-success">Cadastrar</button>
         <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar

      </div>
    </div>
    
</form>

  </div>
</div>

<!-- Final do Modal de Aluno --->


<!-- Alerta do Formulario --->
       

<!-- Modal de Curso --->

<div class="modal fade" id="ModalCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">

<?php if($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if($this->session->flashdata("danger")) : ?>
            <div class="alert alert-danger" role="alert">
         Curso Já Exitente <a href="<?=base_url(); ?>" class="alert-link">Clique aqui para proceguir!</a>.
</div>
        <?php endif ?>
<!-- Alerta do Formulario --->

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
            <input type="text" class="form-control" name="semestre" placeholder="Semestre" id="recipient-name" required>
          </div>

          <button type="submit" class="btn btn-success">Cadastrar</button>
         <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar

      </div>
    </div>
    
</form>

  </div>
</div>
<!-- Final do Modal de Semestre --->


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

