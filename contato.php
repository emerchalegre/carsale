<div class="container">
	<h1>Entre em contato</h1>

	<ul class="breadcrumb">
		<li><a href="home">Página Inicial</a></li>
		<li>Contato</li>
	</ul>

	<div class="row">
		<div class="col-md-9 col-sm-9 col-xs-12">
			<form name="contato" action="" method="post" novalidate>
				<div class="control-group">
					<label class="control-label" for="nome">Nome:</label>
					<div class="controls">
						<input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required class="form-control" data-validation-required-message="Preencha o nome">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="telefone">Telefone:</label>
					<div class="controls">
						<input type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone com DDD" required class="form-control" data-validation-required-message="Preencha o Telefone com DDD" data-mask="(99) 9999-9999?9">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="email">Email:</label>
					<div class="controls">
						<input type="email" name="email" id="email" placeholder="Digite seu e-mail" required class="form-control" data-validation-required-message="Preencha o seu e-mail" data-validation-email-message="Preencha com um e-mail válido">
					</div>
				</div>

				<button type="submit" class="btn btn-success">Enviar Mensagem</button>



			</form>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h2>Outros meios de contato</h2>

			<p>
				Facebook: www.facebook.com/emerchalegre
				<br>
				E-mail: emerchalegre@gmail.com
				<br>
				Telefone: (44) 9731-1988
			</p>
		</div>
	</div>

</div>