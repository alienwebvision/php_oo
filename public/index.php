<?php

class MyClassDad
{

}

class MyClass extends MyClassDad
{
    public $name = "Ales Nascimento";
    private $id;
    protected $lastName;

    public function method1($prm = ''): String
    {
        return 'Method 1';
    }

    protected function method2(): void
    {

    }

    private function method3(): void
    {

    }
}

$obj = new MyClass;

//$methods = get_class_methods($obj);
//$methods = get_class_methods('MyClass');
//var_dump($methods);
//$vars = get_class_vars('MyClass');
//var_dump($vars);

//$vars=get_object_vars($obj);
//var_dump($vars);

//var_dump(get_class($obj));


//var_dump(get_parent_class($obj));

//is_subclass_of($obj,'MyClassDad');

//var_dump(method_exists($obj, 'method1'));


//var_dump(property_exists($obj,'name'));

//function teste()
//{
//    return 123;
//}
//
//$functionN = 'teste';
//$className = 'MyClass';
//$params = [2, 3];
//echo call_user_func($functionN, ...$params);

//$className = 'MyClass';
//var_dump(class_exists('$MyClassName'));

//var_dump(is_a($obj, 'MyClass'));
var_dump($obj instanceof MyClassDad );
