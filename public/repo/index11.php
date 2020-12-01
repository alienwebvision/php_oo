<?php

abstract class Conta
{
    var $number;
    var $name;

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    abstract public function getData(): String;
}




final class ContaPF extends Conta
{

    var $cpf;


    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }


    public function getData(): String
    {
        return "Nome: {$this->name}, Número: {$this->number}, CPF: {$this->cpf}";
    }
}

//TODO: Clasee pessoa Juridica
final class ContaPJ extends Conta
{

    var $cnpj;

    /**
     * @param mixed $cnpj
     */
    public function setCnpj(String $cnpj)
    {
        $this->cnpj = $cnpj;
    }


    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $name
     */
    public function setName(String $name)
    {
        $this->name = strtoupper($name);
    }


    public function getData(): String
    {
        return "Nome: {$this->name}, Número: {$this->number}, CNPJ: {$this->cnpj}";
    }
}

$ales = new ContaPF;
$ales->setNumber('123456');
$ales->setName('Ales Nascimento');
$ales->setCpf('078.653');
echo $ales->getData();

echo '<hr>';
$fulano = new ContaPF;
$fulano->setNumber('123432452456');
$fulano->setName('Fulano Nascimento');
$fulano->setCpf('078.54345345');
echo $fulano->getData();

echo '<hr>';

$alienWeb = new ContaPJ;
$alienWeb->setNumber('777777');
$alienWeb->setName('Alien Nascimento');
$alienWeb->setCnpj('777.777.777-77');
echo $alienWeb->getData();

echo '<hr>';

//$not = new Conta;



