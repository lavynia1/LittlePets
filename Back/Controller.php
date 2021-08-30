<?php
	
	require_once 'Cliente.php';
	require_once 'Veterinario.php';
	require_once 'Conexao.php';
	
	Class Controller {
	
		public function adicionarCli(){
			$nome = $_REQUEST["nome"];
			$cpf = $_REQUEST["cpf"];
			$usuario = $_REQUEST["usuario"];
			$telefone = $_REQUEST["telefone"];
			$email = $_REQUEST["email"];
			$endereco= $_REQUEST["endereco"];
			$_SESSION["nome"] = $nome;
			$_SESSION["cpf"] = $cpf;
			$_SESSION["usuario"] = $usuario;
			$_SESSION["telefone"] = $telefone;
			$_SESSION["email"] = $email;
			$_SESSION["endereco"] = $endereco;
			if($_REQUEST["nome"]=='' or $_REQUEST["usuario"]== '' or $_REQUEST["email"]== '' 
			or $_REQUEST["senha"]=='' or $_REQUEST["cpf"]=='' or $_REQUEST["telefone"]=='' or $_REQUEST["endereco"]==''){
				echo "Por favor complete todos os campos";
			}else{										
				$senhaCrip = md5($_REQUEST["senha"]);
				$cliente = New Cliente( $_REQUEST["nome"],$_REQUEST["usuario"], $_REQUEST["email"],
				$_REQUEST["cpf"],$_REQUEST["telefone"],$_REQUEST["endereco"], $senhaCrip);
				$conexao = new Conexao();
				$conexao->adicionarCli($cliente);
			}
		}
		public function adicionarVet(){
			$nome = $_REQUEST["nome"];
			$cpf = $_REQUEST["cpf"];
			$usuario = $_REQUEST["usuario"];
			$telefone = $_REQUEST["telefone"];
			$email = $_REQUEST["email"];
			$id = $_REQUEST["id"];
			$cod = $_REQUEST["codigo"];
			$endereco= $_REQUEST["endereco"];
			$_SESSION["nome"] = $nome;
			$_SESSION["cpf"] = $cpf;
			$_SESSION["usuario"] = $usuario;
			$_SESSION["telefone"] = $telefone;
			$_SESSION["email"] = $email;
			$_SESSION["id"] = $id;
			$_SESSION["endereco"] = $endereco;
			$_SESSION["codigo"] = $cod;
			if($_REQUEST["nome"]=='' or $_REQUEST["cpf"]=='' or $_REQUEST["usuario"]== '' or $_REQUEST["email"]== '' 
			or $_REQUEST["senha"]=='' or $_REQUEST["telefone"]=='' or $_REQUEST["endereco"]=='' or $_REQUEST["id"]=='' or $_REQUEST["codigo"]==''){
				echo "Complete todos os campos por favor.";
			}else{		
				if( $_REQUEST["codigo"]== 50){
					$senhaCrip = md5($_REQUEST["senha"]);
					$veterinario = New Veterinario( $_REQUEST["nome"],$_REQUEST["cpf"],$_REQUEST["usuario"], $_REQUEST["email"],
					$_REQUEST["telefone"], $_REQUEST["id"],$_REQUEST["endereco"], $_REQUEST["codigo"], $senhaCrip);
					$conexao = new Conexao();
					$conexao->adicionarVet($veterinario);
				}else{
					echo 'Por favor, solicite um código para realizar o cadastro!';
				}
			}
		}
		public function adicionarPet(){
			
		}
		
		
	}
	
?>