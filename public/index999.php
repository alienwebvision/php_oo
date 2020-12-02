<?php
////
////class MyClass
////{
////    private $name;
////    private $cpf;
////    private $age;
////
////    public function __set($name, $value)
////    {
////        $this->$name = $value;
////    }
////
////    /**
////     * @return mixed
////     */
////    public function __get($name)
////    {
////        return $this->$name;
////    }
////}
////
////$obj = new MyClass();
////$obj->name='Ales';
////$obj->cpf='1235655';
////$obj->age = 42;
////echo $obj->name;
//
//
//class Str
//{
//    public function __call($name, $arguments)
//    {
//        if ($name === 'upper') {
//            return strtoupper($arguments[0]);
//        }
//    }
//
//    static public function __callStatic($name, $arguments)
//    {
//        if ($name === 'upper') {
//            return strtoupper($arguments[0]);
//
//        }
//    }
//
//    public function __toString()
//    {
//        return '__toString';
//    }
//
//}
//
//$obj = new Str;
//echo $obj->upper('Valor');
//echo '<hr>';
//echo Str::upper('Value');


