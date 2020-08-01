<?php
    class Contato {
		
        private $nomePessoa;
        private $emailPessoa;
        private $texto;
        private $conn;

        public function __construct() {
            $this->conn = new PDO("mysql:host=localhost;dbname=luanrm47_luanrma","root","");
        }
		
        public function enviarContato() {
            
            //include_once 'conexao.php';

            $stmt = $this->conn->prepare("INSERT INTO contato (CONTATO_NOME, CONTATO_EMAIL, CONTATO_COMENTARIO) "
            . "VALUES(:nome, :email, :texto)");
			
            $stmt->bindParam(":nome", $this->getNomePessoa());
            $stmt->bindParam(":email", $this->getEmailPessoa());
            $stmt->bindParam(":texto", $this->getTexto());

            $stmt->execute();
        }

        public function getConn() {
            return $this->conn;
        }

        public function setConn($conn) {
            $this->conn = $conn;
        }
		
		public function getNomePessoa() {
            return $this->nomePessoa;
        }
        public function setNomePessoa($nomePessoa) {
            $this->nomePessoa = $nomePessoa;
        }

        public function getEmailPessoa() {
            return $this->emailPessoa;
        }
        public function setEmailPessoa($emailPessoa) {
            $this->emailPessoa = $emailPessoa;
        }

        public function getTexto() {
            return $this->texto;
        }
        public function setTexto($texto) {
            $this->texto = $texto;
        }
		
    }