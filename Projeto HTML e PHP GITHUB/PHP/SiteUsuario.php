<?php
	session_start();
?>
<!doctype HTML>
<head>
	<title> Site Usuario </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet" />	
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<style type="text/css">
       
    </style>
</head>
<body>
		  <h1 align="center"><?php
								echo "Boa Tarde ".$_SESSION['usuarioPagina'].". O que desejas fazer?";
							?>
		  </h1>
	
        <br><br>
<p align="center">



</p>
		<div class="row">
			<div id="conteudo" class="col-md-9 col-sm-9" style="height: 500px">
				<br>
				<form action="cadastro.php" method="POST">
				<input type="text" class="form-control" name="mensagem"  placeholder="digite uma mensagem" style="top: 10px">
				<input type="submit" value="Postar!"> </button>
				</br>
				<h3>
				<?php

				if(isset($_SESSION['postUsuario'])){
					echo //$_SESSION['nomeusuario'].": ".
					$_SESSION['postsUsuario'];
				}
				?>
				</h3>
				</form>
			</div>
		</div>
		<!-- rodape da pagina -->
    <section>  
		<div align="center" class="col-md-12" id="rodape">
                Lucas Gustavo Barbosa (c)<br>
				<a href="../html/home 1.6.php">Clique aqui para sair</a>
				
        <div>    
	</section>	
	
</body>
