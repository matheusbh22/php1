<?php
    class Professor{
        private $nome;
        private $idade;
        private $matricula;

        public function __construct ($nome, $idade, $matricula){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->matricula = $matricula;
            echo __CLASS__;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

        }
        
        public function getIdade()
        {
                return $this->idade;
        }

    
        public function setIdade($idade)
        {
                $this->idade = $idade;

        }

        public function getMatricula()
        {
                return $this->matricula;
        }

    
        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

        }

    }



    class ProfessorFixo extends Professor{
        private $salario;

        public function __construct ($nome, $idade, $matricula, $salario){
            Professor::setNome($nome);
            Professor::setIdade($idade);
            Professor::setMatricula($matricula);
            $this->salario = $salario;
            echo __CLASS__;
        }
     


        public function getSalario()
        {
                return $this->salario;
        }

        public function setSalario($salario)
        {
                $this->salario = $salario;
        }
    }

    class ProfessorHorista extends Professor{
        private $valor;
        private $horas;

        public function __construct ($nome, $idade, $matricula, $valor, $horas){
            Professor::setNome($nome);
            Professor::setIdade($idade);
            Professor::setMatricula($matricula);
            $this->valor = $valor;
            $this->horas = $horas;
            echo __CLASS__;
        }

        public function getValor()
        {
                return $this->valor;
        }

        public function setValor($valor)
        {
                $this->valor = $valor;

        }

        public function getHoras()
        {
                return $this->horas;
        }

    
        public function setHoras($horas)
        {
                $this->horas = $horas;

        }

        public function calcularSalario (){
            return $this->valor * $this->horas;
            
        }
    }
   
    $professor1 = new ProfessorFixo("Matheus", "21", "741258963", 5000);
    
    echo $professor1->getNome();
    echo $professor1->getIdade();
    echo $professor1->getMatricula();
    echo $professor1->getSalario();

    $professor2 = new ProfessorHorista("Cleunice", "53", "369852147", 100, 50);

    echo $professor2->getNome();
    echo $professor2->getIdade();
    echo $professor2->getMatricula();
    echo $professor2->calcularSalario();

        for($i=5; $i<16; $i++){
            echo $i."-";
        }

        class Usuario {
                private $login;
                private $senha;

                public function __construct($login, $senha){
                        $this->login = $login;
                        $this->senha = $senha;
                }

                public function getLogin()
                {
                        return $this->login;
                }

                public function setLogin($login)
                {
                        $this->login = $login;

                }

                public function getSenha()
                {
                        return $this->senha;
                }

                public function setSenha($senha)
                {
                        $this->senha = $senha;

                }

                function validarSenha($validar){

                        if ($this->senha == $validar){
                        echo "Senha correta";
                        }
                        else{
                        echo "Senha incorreta";
                        }
                }
        }

        $usuario1 = new Usuario("Matheus", "456987");

        echo $usuario1->getLogin();
        echo $usuario1->getSenha();
        $usuario1->validarSenha("45698");
?>