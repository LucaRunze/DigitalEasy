<!DOCTYPE html>
	<head>
		<meta charset="utf-8" />
		<title>Recuperação da Senha</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
       
	</head>
	<body>
		<div class="container">

			<form class="contact1-form validate-form" method="post">
				<span class="contact1-form-title">
					Alteração de Senha
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Email Cliente">
					<input class="input1" type="email" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1 validate-input" data-validate = "Nova Senha Cliente">
					<input class="input1" type="password" name="password" placeholder="Nova Senha">
					<span class="shadow-input1"></span>
				</div>
                <div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span>
							Alterar
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
    </body>
</html>