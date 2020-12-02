<?php
////////
////////class Category
////////{
////////    public $name;
////////
////////
////////}
////////
////////class Post
////////{
////////    public $title;
////////    public $content;
////////    private $category;
////////
////////    public function setCategory(Category $category)
////////    {
////////        $this->category = $category;
////////    }
////////
////////    public function category()
////////    {
////////        return $this->category;
////////    }
////////
////////}
////////
////////
////////$php = new Category();
////////$php->name = 'PHP';
////////
////////$post01 = new Post;
////////$post01->title = 'PHP é legal';
////////$post01->content = '...';
//////////$post01->category = $php;
////////
////////echo $post01->title;
////////echo '<hr>';
////////echo $post01->content;
////////echo '<hr>';
////////$post01->setCategory($php);
////////
////////echo $post01->category();
//////////echo $post01->category->name;
////////echo '<hr>';
////////
//////
//////
//////class Cart
//////{
//////    private $itens = [];
//////
//////    public function add(Product $product)
//////    {
//////        array_push($this->itens, $product);
//////    }
//////
//////    public function all(): array
//////    {
//////        return $this->itens;
//////    }
//////}
//////
//////class Product
//////{
//////    public $name;
//////}
//////
//////$p1 = new product;
//////$p1->name = 'DVD';
//////
//////$p2 = new product;
//////$p2->name = 'VAZO';
//////
//////$p3 = new product;
//////$p3->name = 'ROUPA';
//////
//////$cart = new Cart();
//////$cart->add($p1);
//////$cart->add($p2);
//////$cart->add($p3);
//////$itens = $cart->all();
//////foreach ($itens as $product) {
//////    echo "Nome: {$product->name} <br>";
//////}
////
////
////class Endereco
////{
////    public $rua;
////    public $bairro;
////}
////
////class User
////{
////    public $name;
////    private $endereco;
////
////    public function setEndereco(String $rua, String $bairro)
////
////    {
////        $endereco = new Endereco();
////        $endereco->rua = $rua;
////        $endereco->bairro = $bairro;
////
////        $this->endereco = $endereco;
////    }
////
////    public function getEndereco(): String
////    {
////        return "Endereço: rua {$this->endereco->rua}, bairro: {$this->endereco->bairro}";
////    }
////
////}
////
////$ales = new User();
////$ales->name = 'Ales';
////$ales->setEndereco('Rua 18', 'Bairro CG');
////echo $ales->name;
////echo $ales->getEndereco();
//
//interface PdfInterface
//{
//    static public function generate(String $content): String;
//
//    static public function printPdf($file);
//}
//
//class DOMPDF implements PdfInterface
//{
//    static public function generete(String $content): String
//    {
//        return "<h1>{$content}</h1>";
//    }
//
//    static public function printPdf($file)
//    {
//        return $file;
//    }
//
//    static public function generate(String $content): String
//    {
//        // TODO: Implement generate() method.
//        return "<h3>{$content}</h3>";
//    }
//}
//
//class PDF extends Pdf
//{
//
//}
//
//echo DOMPDF::generete('Ola');
//
//
//
//
//
//
//
//
//
//
//
//
//
