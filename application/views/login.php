<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Controle de Pendêcias</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>/assets/css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?=base_url(); ?>/assets/img/logologin.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">

						<?php if($this->session->flashdata("danger")) : ?>
           <div class="alert alert-danger" role="alert">
          Senha ou usuário errado tente novamente!!
          </div>
        <?php endif ?>

							<h4 class="card-title">Entrar</h4>
						 
							<form class="form-signin" method="post" action="<?= base_url() ?>Login/store">
								<div class="form-group">
									<label for="email">Nome usuário</label>
									<input id="email" type="text" class="form-control" name="email" value="" required autofocus>
								
								</div>

								<div class="form-group">
									<label for="password">Senha</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								   
								</div>
			 <!-- 
								 <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" value="1" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Biblioteca</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" value="2" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Cae </label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" value="3" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Secretaria</label>
              </div>
            </div>
			
						-->
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Entrar
									</button>
								</div>
							
							</form>
						</div>
					</div>
					<div class="footer">
						Instituto Federal de Educação, Ciência e Tecnologia Baiano – Campus Guanambi
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
