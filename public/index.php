<?php


class ContaPerfis
{
    var $number;
    var $name;
    var $cpf;

    public function setNumber(String $number)
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
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getNumber(): String
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getName(): String
    {
        return $this->name;
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

$ales = new ContaPerfis;
$ales->setNumber('123456');
$ales->setName('Ales Nascimento');
$ales->setCpf('078.653');
echo $ales->getData();
