<!doctype html>
<html class="no-js" lang="pt-br">
	<head>
		<?php 
		include("../includes/site-estrutura/head.php")
		?>
	</head>
	<body>
		<div class="wrap">
			<?php include("../includes/site-conteudo/header.php")?>
			<div class="banner-v1 banner-image-container banner-inner" style="background:#000">
				<div class="banner-caption-v2">
					<h2>Contato</h2>
				</div>
			</div>
			<section class="content-layout content-section">
				<div class="container">
					<div class="heading text-center">
						<h2>Entre em Contato</h2>
					</div>
					<div class="contents">
						<p class="text-center">Aí é só aguardar mais um pouco que a gente retorna.</p>

						<div class="contact-form pad-top-large">    
							<form data-parsley-validate>
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" placeholder="Seu Nome" class="form-control input-lg" required name="name">
									</div>
									<div class="form-group col-sm-6">
										<input type="email" placeholder="Seu E-mail" class="form-control input-lg" required name="email">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" placeholder="Assunto" class="form-control input-lg" required name="subject">
									</div>
									<div class="form-group col-sm-6">
										<input type="text" placeholder="Telefone" class="form-control input-lg" required name="phoneno">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<textarea class="form-control" rows="5" required placeholder="Mensagem" name="mess"></textarea>
									</div>              
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-lg hvr-shutter-out-vertical">Enviar Mensagem</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<?php include("../includes/site-conteudo/footer.php")?>
		</div>
		<script src="js/vendor/vendor.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>