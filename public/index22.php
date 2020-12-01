<?php

//class Pessoa
//{
//
//    //public, protected,private
//
//    private $name;
//
//    public function setName(String $name)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getName(): String
//    {
//        return $this->name;
//    }
//}
//
//$ales = new Pessoa();
//$ales->setName('Ales Nascimento');
//echo $ales->getName();


class Escola
{
    const PID = 'Ale4585';
    private static $saldo = 0.0;

    static public function getSaldo(): float
    {
        return self::$saldo;
    }

    static public function addSaldo(float $saldo)
    {
        self::$saldo+=$saldo;
    }
}

class Aluno
{
    private $name;
    private $saldo = 0.0;

    public function addSaldo(float $saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function novaCompra(float $valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;

//            Escola::$saldo += $valor;
            Escola::addSaldo($valor);
            return true;
        } else {
            return false;
        }

    }
}

echo '<hr>';

$aluno01 = new Aluno();
//$aluno01->name = 'Ales';
echo $aluno01->getSaldo();
echo '<br>';
$aluno01->addSaldo(50.0);
echo $aluno01->getSaldo();
$aluno01->novaCompra(20.0);
echo '<br>';
echo $aluno01->getSaldo();

$response = $aluno01->novaCompra(100);
if (!$response) {
    echo 'Saldo insuficiente';
}
echo '<br>';
echo $aluno01->getSaldo();

//const nao pode ser mudado
//$escola01::PID = 123;
echo '<hr>';

$aluno02 = new Aluno();
//$aluno02->name = 'Outro Aluno';
echo $aluno02->getSaldo();
echo '<br>';
$aluno02->addSaldo(20);
echo $aluno02->getSaldo();
echo '<hr>';

$aluno02->addSaldo(100);
$aluno02->novaCompra(30);
echo $aluno02->getSaldo();
echo '<hr>';

//Escola::$saldo;
echo Escola::getSaldo();



