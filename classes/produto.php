<?php
//cria a classe produto
class Produto {
    //atributos
    public $nome;
    public $preco;

    //metodos
    public function mostrarProduto(){
        echo "\nProduto: {this->nome}\n";
        echo "\nPreço R$: {this->preco}\n";
    }
}
//criando um objeto a classe produto (p1, p2)
$p1 = new Produto;
//dando os atributos da clase
$p1->nome = "Mouse";
$p1->preco = 10;
//chamando um metodo
$p1->mostrarProduto();

//criando um objeto a classe produto (p1, p2)
$p2 = new Produto;
//dando os atributos da clase
$p2->nome = "Teclado";
$p2->preco = 23;
//chamando um metodo
$p2->mostrarProduto();

?>