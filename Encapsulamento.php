Encapsulamento:

conceito: Proteger as propriedades de acesso externos.

exemplo:

<?php

  class Post{
    //Atributos:
    public $likes = 0;
    public $comments = [];

  // para fazer sentido transformo a propriedade public $author; em privada(assim externamente não tenho acesso a ela, mas a função Get e Set abaixo estarão public assim o executor externo puxara informação dessa função, que internamente puxa informação do private $author;):

    private $author;

    //função / Metodos dentro da classe:

    public function aumentarLike(){
        $this->likes++;
    }

   //Devo criar dois Métodos, um pra setar/modificar a informação(set) e outro pra pegar a informação(get):

    public function setAuthor($n){
       $this->author = $n;
 }
    public function getAuthor(){
       return $this->author;
 }
}

//Objetos:
$post1 = new Post();
$post1->setAuthor('Izaias');  //executando o Metodo


echo "POST 1: ".$post1->likes."likes - ".$post1->getAuthor().<br/>";

?>
