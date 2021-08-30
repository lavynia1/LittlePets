<?php
	require_once 'Controller.php';

	class Cliente{
		private $nome;
		private $usuario;
		private $email;
		private $cpf;
		private $telefone;
		private $senha;
		private $endereco;
		
		function __construct($nome, $usuario, $email,$cpf,$telefone,$endereco, $senha){
			$this->nome = $nome;
			$this->usuario = $usuario;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->telefone = $telefone;
			$this->endereco = $endereco;
			$this->senha = $senha;
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function setNome($valor){
			$this->name = $valor;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setTelefone($valor){
			$this->telefone = $valor;
		}
		public function setEndereco($valor){
			$this->endereco = $valor;
		}
		public function setUsuario($valor){
			$this->usuario = $valor;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}
		public function setCpf($valor){
			$this->cpf = $valor;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}
		
		public function adicionar(){
			$controler = new Controller();
			$controler->adicionarCli();
		}
	}
	
?>