<?php
	require_once 'Cliente.php';
	require_once 'Veterinario.php';
	require_once 'Pet.php';
	
	Class Conexao{
		
		public function adicionarCli(Cliente $cli){
			$usunome = "root";
			$password = "";
			$cliente = $cli;
			try {
				$conn = new PDO('mysql:host=localhost;dbname=clinica', $usunome, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$nome = $cliente->getNome();
				$usuario = $cliente->getUsuario();
				$email = $cliente->getEmail();
				$cpf = $cliente->getCpf();
				$telefone = $cliente->getTelefone();
				$endereco = $cliente->getEndereco();
				$senha = $cliente->getSenha();
				$stmt = $conn->prepare('INSERT INTO CLIENTE VALUES(?,?,?,?,?,?,?)');
				$stmt->bindParam(1,$nome, PDO::PARAM_INT);
				$stmt->bindParam(2,$usuario, PDO::PARAM_INT);
				$stmt->bindParam(3,$email, PDO::PARAM_INT);
				$stmt->bindParam(4,$cpf, PDO::PARAM_INT);
				$stmt->bindParam(5,$telefone, PDO::PARAM_INT);
				$stmt->bindParam(6,$endereco, PDO::PARAM_INT);
				$stmt->bindParam(7,$senha, PDO::PARAM_INT);
				$stmt->execute();
			} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}
		}
		public function adicionarVet(Veterinario $vet){
			$usunome = "root";
			$password = "";
			$veterinario = $vet;
			try {
				$conn = new PDO('mysql:host=localhost;dbname=clinica', $usunome, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$nome = $vet->getNome();
				$usu = $vet->getUsuario();
				$email = $vet->getEmail();
				$cpf = $vet->getCpf();
				$telefone = $vet->getTelefone();
				$id = $vet->getId();
				$endereco = $vet->getEndereco();
				$codigo = '50';
				$senha = $vet->getSenha();
				$stmt = $conn->prepare('INSERT INTO VETERINARIO VALUES(?,?,?,?,?,?,?,?,?)');
				$stmt->bindParam(1,$nome, PDO::PARAM_INT);
				$stmt->bindParam(2,$usu, PDO::PARAM_INT);
				$stmt->bindParam(3,$email, PDO::PARAM_INT);
				$stmt->bindParam(4,$cpf, PDO::PARAM_INT);
				$stmt->bindParam(5,$telefone, PDO::PARAM_INT);
				$stmt->bindParam(6,$id, PDO::PARAM_INT);
				$stmt->bindParam(7,$codigo, PDO::PARAM_INT);
				$stmt->bindParam(8,$endereco, PDO::PARAM_INT);
				$stmt->bindParam(9,$senha, PDO::PARAM_INT);
				$stmt->execute();
			} catch(PDOException $erro) {
				echo 'ERROR: ' . $erro->getMessage();
			}
		}
		public function adicionarPet(Pet $pet, Cliente $pessoa){
			$usunome = "root";
			$password = "";
			$animal = $pet;
			$cliente = $pessoa;
			try {
				$conn = new PDO('mysql:host=localhost;dbname=clinica', $usunome, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$nome = $animal->getNome();
				$cpf = $cliente->getCpf();
				$especie = $animal->getEspecie();
				$raca = $animal->getRaca();
				$idade = $animal->getIdade();
				$dono = $cliente->getNome();
				$stmt = $conn->prepare('INSERT INTO PET VALUES(?,?,?,?,?,?)');
				$stmt->bindParam(1,$nome, PDO::PARAM_INT);
				$stmt->bindParam(2,$cpf, PDO::PARAM_INT);
				$stmt->bindParam(3,$especie, PDO::PARAM_INT);
				$stmt->bindParam(4,$raca, PDO::PARAM_INT);
				$stmt->bindParam(5,$idade, PDO::PARAM_INT);
				$stmt->bindParam(6,$dono, PDO::PARAM_INT);
				$stmt->execute();

			} catch(PDOException $e) {
				echo 'ERRO: ' . $e->getMessage();
			}
		}
		public function excluirPet(Pet $pet, Cliente $pessoa){
			$usunome = "root";
			$password = "";
			$cliente = $pessoa;
			$animal = $pet;

			try {
				$conn = new PDO('mysql:host=localhost;dbname=clinica', $usunome, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$dono = $cliente->getNome();
				$cpf = $cliente->getCpf();
				$nome = $animal->getNome();
				$especie = $animal->getEspecie();
				$raca = $animal->getRaca();
				$idade = $animal->getIdade();
				$stmt = $conn->prepare('DELETE FROM PET WHERE CPF=(?) AND NOME = (?)'); //!!!!!teste!!!!
				$stmt->bindParam(1,$cpf, PDO::PARAM_INT);
				$stmt->bindParam(2,$nome, PDO::PARAM_INT);
				$stmt->execute();

			} catch(PDOException $erro) {
				echo 'ERRO: ' . $erro->getMessage();
			}
		}
		
		
		/*function logout(){
        $_SESSION["conectado"]='0'; 
        $_SESSION["nome"]='';
		}*/
		
		
		
	}
		
	
	
?>