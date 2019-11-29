<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Loja 2.0</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
       
        <link href="<?php echo BASE_URL; ?>assets/css/footer.css" type="text/css" rel="stylesheet">

	</head>
	<body>
    <?php
        $users = new Users();
        $id_user = $_SESSION['id_user'];
        $dado = $users->infoPerfil($id_user);
        $dados = $dado->fetch();
		?>	
	<div class="container" style="background-color:#f2f2f2; border: 1px solid #7575a3; padding: 5px;">
					<form method="POST" style="padding: 5px;">
						<div class="form-group">
						  <label for="cep">CEP:</label>
						  <input type="text" class="form-control" id="cep" value="<?php echo $dados['cep'];?>" name="cep" style="width:20%;">
						</div>
						<div class="form-group">
						  <label for="telefone">Telefone:</label>
						  <input type="tel" class="form-control" id="telefone" value="<?php echo $dados['telefone'];?>" name="telefone" style="width:20%;">
						</div>
						<div class="form-group">
						  <label for="endereco">Endereco:</label>
						  <input type="text" class="form-control" id="endereco" value="<?php echo $dados['endereco'];?>" name="endereco" style="width:40%;">
						  <label for="num_casa">Numero da Casa:</label>
						  <input type="text" class="form-control" id="num_casa" value="<?php echo $dados['num_casa'];?>" name="num_casa" style="width:10%;">
						</div>
                        <div class="form-group">
                          <label for="referencia">Referencia:</label>
						  <input type="text" class="form-control" id="referencia" value="<?php echo $dados['referencia'];?>" name="referencia" style="width:40%;">
                        </div>
						<div class="form-group">
						  <label for="cidade">Cidade:</label>
						  <input type="text" class="form-control" id="cidade" value="<?php echo $dados['cidade'];?>" name="cidade" style="width:40%;">
						  <label for="estado">Estado:</label>
						  <input type="text" class="form-control" id="estado" value="<?php echo $dados['estado'];?>" name="estado" style="width:10%;">
						</div>
							<button type="submit" class="btn btn-primary">Salvar</button>
					</form>
				</div>
    </body>
</html>