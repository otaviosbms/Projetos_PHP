<?php

// \ SOBRE CLASSES E OBJETOS: /
// Uma class pode ser comparada a uma forma de bolo, onde por meio dele são produzidos os objetos
// que seriam os bolos. 
//para facil entendimento deve ser pronunciado: "objeto" do TIPO "nome da classe".
// a variavel é APENAS um endereço para onde o objeto é criado.


// \ uma função dentro de uma classe se chama METODO. /

// OBS: O CODIGO NÃO POSSUI ELSE POR SEGUE A TECNICA EARLY RETURN PARA FACIL VISUALIZAÇÃO.
// https://dorianneto.com/pt/posts/torne-se-um-ninja-das-funcoes-com-early-return/.


class Conta
{

    // ATRIBUTOS DEVEM SER PRIVADOS.

    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0; // static: atributo que diz respeito APENAS A CLASSE (FORMA), não tendo relação com os objetos/instancias .

    // \ METODO CONSTRUTOR / 
    // metodos construtores devem ser usados apenas para inicializar a instancia de forma válida.
    // Métodos que são chmados automaticamente assim que um objeto é criado

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        // pré definições da criação da conta
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        self::$numeroDeContas++; // nomedaclass:: ou self:: -> Acessa as informações estaticas da classe
    }

    // \ MÉTODO DESTRUTOR /
    // quando um objeto perde ou é criado sem uma variavel de endereço.
    // OBS: O metodo destrutor é AUTOMATICO, ou seja, a função dele craida na class é apenas usada como um aproveitador do instante onde o objeto é apagado para a aplicação de novas funcionalidades

    // NESTE CASO: metodo destrutor informa ao contador que remove um item do numero de contas caso um obejeto seja apagado. 
    public function __destruct()
    {
        self::$numeroDeContas--;
    }


    // MÉTODOS PÚBLICOS:

    //operações:

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo){ // $this se refere ao objeto que "chamou" o método
            echo "Saldi indisponível";
            return;
        }
            $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "O valor precisa ser positivo";
            return;
        }
            $this->saldo += $valorADepositar;
        
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        
    }

    // NÃO MAIS NECESSÁRIO DEVIDO O MÉTODO CONSTRUTOR.
    // //definições:
    // public function defineCpfTitular(string $cpf):void
    // {
    //     $this->cpfTitular = $cpf; 
    // }
    // public function defineNomeTitular(string $nome):void
    // {
    //     $this->nomeTitular = $nome; 
    // }

    //chamadas:

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public static function recuperarNumeroDeContas(): int // static: atributo que diz respeito APENAS A CLASSE (FORMA), não tendo relação com os objetos/instancias .
    {
        return self::$numeroDeContas;
    }


    // MÉTODOS PRIVADOS (de uso exclusivo da class).

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "O nome precisa ter no mínimo 5 caracteres.";
            exit();
        }
    }

}
