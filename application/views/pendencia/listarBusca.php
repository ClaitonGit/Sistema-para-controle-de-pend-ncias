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

	<title>Alunos Pendentes</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
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
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
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
                    <a href="<?= base_url('/') ?>">
                            <i class="pe-7s-user"></i>
                            <p>Cadastrar Pendência</p>
                        </a>
                    </li>

                <li>
                <a href="<?= base_url('Pendencia/listandoHis') ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Pendências Resolvidas </p>
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
                                <li><a href="<?= base_url('/') ?>">Cadastrar Nova Pendência</a></li>
                                <li class="divider"></li>
                                <li> <a href="<?= base_url('Pendencia/listandoHis') ?>">Pendência Resolvidas</a></li>                   
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

        <!-- Busca Por nome -->
        <div class="col-md-3" style="top: 5px;">
                         <form name="form" action="<?= base_url() ?>Pendencia/pesquisarAluno" method="post">
                         <div class="row"> 
                         <div class="form-group">
                         <div class="col-md-8">
                              <input type="text" class="form-control" name="pesquisarP" value=""  placeholder="Informe o nome"></div>
                                <div class="col-md-1">
                               <button type="submit"  class="btn btn-success ">Buscar</button>
                         </div> 
                         </div>
                         </div>
                         </form>
                         </div> 

 
                         <!-- Fina Busca Por nome -->
 <br /><br /><br />
                         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Alunos Pendentes</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                            <table class="table table-striped table-bordered" id="minhaTabela">
                                    <thead>
                                        <th>Matrícula</th>
                                        <th>Aluno</th>
                                        <th>Data</th>
                                    	<th>Curso</th>
                                        <th>Semestre</th>
                                        <th>Pendência</th>
                                        <th>Descrição</th>
                                        <th class="text-center">Ação</th>

                                    </thead>
                                   
                                    <tbody>
                             <?php foreach ($pendencia as $pen){ ?>
                                    
                                  <tr>
                                  <td><?php echo $pen->nmatricula;?></td>
                                  <td><?php echo $pen->nome; ?></td>
                                  <td class="text-center"><?php echo $pen->datas; ?></td>
                                  <td class="text-center"><?php echo $pen->nomecurso; ?></td>
                                  <td class="text-center"><?php echo $pen->semestre; ?></td>
                                  <td><?php echo $pen->titulo; ?></td>
                                  <td><?php echo $pen->descricao; ?></td>
                                 
                                    <td  class="text-center">
                                        <button  type="button" data-toggle="modal" data-target="#ModalEditaSemestre"
                                        data-whateverid="<?php echo $pen ->idpendencia ?>" 
                                        data-whatevernome="<?php echo $pen->statusatual ?>"
                                        class="btn btn-success"> Remover pendência </button>
                                        </td>
                                  </tr>

                                    <?php }?>
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

<!--Inicio Modal -->
<div class="modal fade" id="ModalEditaSemestre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<form action="<?= base_url() ?>Pendencia/RemoverPen"  method="post">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="title">Remover Pendência</h4>
        
      </div>
      <div class="modal-body">

            <div class="form-group">
            <input type="hidden" name="idpendencia" id="recipient-id">

                <label for="recipientname" class="col-form-label">Deseja remover a pendência</label>
            
            </div>

            <button type="submit" class="btn btn-success">Sim</button>
            <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Não

     </div>
    </div>
    
</form>

</div>
</div>
    
<!--Final Modal -->


</body>

   
       <!--   Core JS Files   -->
       <script src="<?=base_url(); ?>/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
       <script src="<?=base_url(); ?>/assets/js/jquery-3.5.1.js" type="text/javascript"></script>
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

$('#ModalEditaSemestre').on('show.bs.modal', function (event) {
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


   
<?php else : ?>
    <?php redirect("Login");
    ?>
    
<?php endif ?>

</html>
