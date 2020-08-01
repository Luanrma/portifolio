<?php
    class Contato {
        private $nomePessoa;
        private $emailPessoa;
        private $texto;

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

        public function enviarContato() {
            session_start();
            include_once 'conexao.php';

            $stmt = $conn->prepare("INSERT INTO Pessoa (PessoaNome, PessoaEmail, Comentario) "
            . "VALUES(:nome, :email, :texto)");

            $stmt->bindParam(":nome", $this->getNomePessoa());
            $stmt->bindParam("email", $this->getEmailPessoa());
            $stmt->bindParam("texto", $this->getTexto());

            $stmt->execute();
            
            if ($stmt->rowCount() != 0) {
                $_SESSION['msgSucesso'] = 'Contato enviado com sucesso!';
                header('Location:../index.php');
                exit();
            } else {
                $_SESSION['msgErro'] = 'Falha ao estabelecer contato!';
                header('Location:../index.php');
                exit();
            }
        }
    }