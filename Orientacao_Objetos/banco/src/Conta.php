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
    private $saldo = 0;

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
}
