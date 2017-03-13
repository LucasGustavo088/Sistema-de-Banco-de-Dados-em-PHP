<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<title> Sistema de Banco de Dados </title>
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
 	
	<!-- cabeçario -->
	<section>	
		<div class="container col-md-12  slider" id="cabecario">
		  <h1 align="center">Sistemão de Login em PHP com comunicação em MySQL</h1>
		</div>
	</section>
        <br><br>
    <!-- logon -->
	<section class="duplicatable-content" >		
		<div class="row">
			<div id="conteudo" class="col-md-9" style="height: 180px">
				<div id="conteudologin" class="col-md-4 col-sm-4" > 
					<div class="feature">
					<br>
						<form action="../PHP/cadastro.php" method="POST">
							<p class="text-center text-danger">
							<?php 
							if(isset($_SESSION['loginErro'])){
								echo $_SESSION['loginErro'];
								
								unset($_SESSION['loginErro']);
								
							}
							
							?>
							
						</p>
						<p class="text-center text-success">
							<?php 
							if(isset($_SESSION['loginSucesso'])){
								echo $_SESSION['loginSucesso'];
								unset($_SESSION['loginSucesso']);
							}
							?>
						</p>
							<div style="margin: 10px">
								<label>Login: </label><input class="inputlogin" name="email" type="email" ><br>
							</div>	
							<div style="margin: 10px">	
								<label>Senha: </label><input class="inputlogin" name="senha" type="text" ><br>
							</div>	
							<div style="margin: 10px">
							<input  type="submit"/> 
							</div>
						
						</form>
						
					</div>
				</div>	
				<!-- teste de envio de dados para o MySQL -->
				<div id="conteudologin" class="col-md-8 col-sm-8" >
					<div class="feature">
					<h2 align="center">Não possui cadastro? <br>
					<a href="CadastroDeCliente.html" target="_top">Clique aqui!</a></h2>
					
					<br>
					
					 
					</div>
				</div>
					
			</div>		
		</div>		
	</section>	
	<br>
	<section>	
	<!-- conteudo -->    
        <div class="row">
			<div id="conteudo" class="col-md-9 col-sm-9">
					<div id="tituloConteudo" >
						<h1 align="center"> Proposta </h1>
					</div>
				<div id="textoconteudo" align="center">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
				
				</div>
			</div>
		</div>
        <br><br>
	</section>		
    <!-- rodape da pagina -->
    <section>  
		<div align="center" class="col-md-12" id="rodape">
                Lucas Gustavo Barbosa (c)
        <div>    
	</section>	
    <script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/ProdutosJQ.js"></script>



</body>
</html>