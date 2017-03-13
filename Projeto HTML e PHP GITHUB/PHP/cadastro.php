<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title> Validacao de login e cadastro </title>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet" />	
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<style type="text/css">
       
    </style>
	</head>
<body>

<?php
//incluir a conexao do banco de dados php/sql
	session_start();
	include_once("conexao.php");
	

//LOGIN DA PAGINA INICIAL
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
	$emailUsuarioLogin = mysqli_real_escape_string($conexao,$_POST['email']);//escapa de caracteres especiais "/,*"
	$senhaUsuarioLogin = mysqli_real_escape_string($conexao,$_POST['senha']);
	$senhaUsuarioLogin = md5($senhaUsuarioLogin);
	
	echo "nome e senha inseridos"."<br>".$emailUsuarioLogin."<br>".$senhaUsuarioLogin;
	
	//verificar o login no banco de dados
	$SQLselect = "select * from cadastro where email = '$emailUsuarioLogin' && senha = '$senhaUsuarioLogin' LIMIT 1";
	$resultadoLoginUsuario = mysqli_query($conexao,$SQLselect);
	$resultadoLogin = mysqli_fetch_assoc($resultadoLoginUsuario);
	
	
		if(isset($resultadoLogin)){
		//abrindo sessoes para os dados serem interligados entre as paginas
		$_SESSION['usuarioPagina'] = $resultadoLogin['nomeUsuario'];
		header("Location: ../php/SiteUsuario.php");
		
		//header("Location: SiteUsuario.php");
		echo "login e senha corretos";
		}else{//caso nao tenha achado um login e senha no banco de dados	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuario ou senha Invalido";
			echo "login e senha incorretos";
			header("Location: ../html/home 1.6.php");
		}
	}

//CADASTRO DA PAGINA INICIAL
	if((isset($_POST['emailCadastro'])) && (isset($_POST['senhaCadastro'])) && (isset($_POST['nomeUsuario'])) ){
	$nomeUsuarioCadastro = mysqli_real_escape_string($conexao,$_POST['nomeUsuario']);
	$emailUsuarioCadastro = mysqli_real_escape_string($conexao,$_POST['emailCadastro']);
	$senhaUsuarioCadastro = mysqli_real_escape_string($conexao,$_POST['senhaCadastro']);
	$senhaUsuarioCadastro = md5($senhaUsuarioCadastro);
	//atribuindo a sessao usuario pagina o nome do usuario
	$_SESSION['usuarioPagina'] = $_POST['nomeUsuario'];
	
	//inserir no banco de dados
	$SQLinsert = "insert into cadastro(email,senha,nomeUsuario) VALUES ";
	$SQLinsert .= "('$emailUsuarioCadastro','$senhaUsuarioCadastro','$nomeUsuarioCadastro')"; 
	//verificação se a operação foi executada com sucesso
	mysqli_query($conexao,$SQLinsert) or die("Erro ao tentar cadastrar registro");
	mysqli_close($conexao);
	echo "Cliente ".$_SESSION['usuarioPagina'] ." cadastrado com sucesso!";
	}
	
//ADICIONAR MENSAGEM NO BANCO DE DADOS
	if((isset($_POST['mensagem']))){
	$mensagemUsuario = $_POST['mensagem'];
	$usuarioMessagem = $_SESSION['usuarioPagina'];	
		//inserir a mensagem no banco de dados
		$SQLinsertMessage = "insert into feedback(mensagem,usuario,datahora) values 
							( '$mensagemUsuario','$usuarioMessagem',now() )";
		mysqli_query($conexao,$SQLinsertMessage) or die ("mensagem não foi adicionada ao banco com sucesso");	
		//selecionar mensagem do banco de dados pra inserir numa sessao para o usuario;
		$SQLselectMessage = "select * from feedback group by datahora order by datahora desc limit 1";
		$SQLselectMessageResult = mysqli_query($conexao,$SQLselectMessage) or die("erro na seleção de dados");
		$SQLselectMessageResults = mysqli_fetch_array($SQLselectMessageResult);
		
		
		if(isset($SQLselectMessageResult)){
		$_SESSION['postsUsuario'] = 		$SQLselectMessageResults['mensagem'];
		$_SESSION['nomeusuario'] = 	$SQLselectMessageResults['usuario'];
		
		
		
		
		header("Location: ../php/SiteUsuario.php");
		
		}
		
		
	
	}

	
	




	
			
		  
	//header("location: ../html/home 1.6.html");
?>
</body>
</html>