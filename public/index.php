<?php
//
//class Category
//{
//    public $name;
//
//
//}
//
//class Post
//{
//    public $title;
//    public $content;
//    private $category;
//
//    public function setCategory(Category $category)
//    {
//        $this->category = $category;
//    }
//
//    public function category()
//    {
//        return $this->category;
//    }
//
//}
//
//
//$php = new Category();
//$php->name = 'PHP';
//
//$post01 = new Post;
//$post01->title = 'PHP é legal';
//$post01->content = '...';
////$post01->category = $php;
//
//echo $post01->title;
//echo '<hr>';
//echo $post01->content;
//echo '<hr>';
//$post01->setCategory($php);
//
//echo $post01->category();
////echo $post01->category->name;
//echo '<hr>';
//


class Cart
{
    private $itens = [];

    public function add(Product $product)
    {
        array_push($this->itens, $product);
    }

    public function all(): array
    {
        return $this->itens;
    }
}

class Product
{
    public $name;
}

$p1 = new product;
$p1->name = 'DVD';

$p2 = new product;
$p2->name = 'VAZO';

$p3 = new product;
$p3->name = 'ROUPA';

$cart = new Cart();
$cart->add($p1);
$cart->add($p2);
$cart->add($p3);
$itens = $cart->all();
foreach ($itens as $product) {
    echo "Nome: {$product->name} <br>";
}
