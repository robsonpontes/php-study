<?php 
	//variável que verifica se a autenticação foi realizada
	$usuario_autenticado = false;
	//Usuários do sistema
	$usuarios_app = [
		['email' => 'adm@teste.com.br', 'senha' => '123456'],
		['email' => 'user@teste.com.br', 'senha' => 'abcd']
		];
	/*	
	echo '<pre>';
	print_r($usuarios_app);
	echo '<pre/>';
	
	print_r($_GET);
	echo '<br/>';
	echo $_GET['email'];
	echo '<br/>';
	echo $_GET['senha'];
	*/

	foreach($usuarios_app as $user) {
		
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
		}

	}

	if ($usuario_autenticado == true) {
		echo 'Usuário autenticado';

	}else {
		header('location: index.php?login=erro');
	}
	/*
	print_r($_POST);
	echo '<br/>';
	echo $_POST['email'];
	echo '<br/>';
	echo $_POST['senha'];
	*/

 ?>