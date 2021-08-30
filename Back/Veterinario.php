<?php
	require_once 'Controller.php';
	class Veterinario{
		private $nome;
		private $cpf;
		private $usu;
		private $email;
		private $telefone;
		private $endereco;
		private $id;
		private $codigo;
		private $senha;
		
		function __construct($nome, $usuario, $email,$cpf,$telefone,$id,$endereco, $codigo,$senha){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->usu = $usuario;
			$this->email = $email;
			$this->telefone = $telefone;
			$this->endereco= $endereco;
			$this->id = $id;
			$this->codigo=$codigo;
			$this->senha = $senha;
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getUsuario(){
			return $this->usu;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function getId(){
			return $this->id;
		}
		public function getCodigo(){
			return $this->codigo;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setNome($valor){
			$this->name = $valor;
		}
		public function setCodigo($valor){
			$this->codigo = $valor;
		}
		public function setUsuario($valor){
			$this->usuario = $valor;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}
		public function setEndereco($valor){
			$this->endereco = $valor;
		}
		public function setId($valor){
			$this->id = $valor;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}

		public function adicionar(){
			$controler = new Controller();
			$controler->adicionarVet();
		}
	}
	
?>