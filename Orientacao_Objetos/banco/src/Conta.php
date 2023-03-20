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
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;

    // \ METODO CONSTRUTOR / 
    // metodos construtores devem ser usados apenas para inicializar a instancia de forma válida.
    // Métodos que são chmados automaticamente assim que um objeto é criado

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        // pré definições da criação da conta
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

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

}
