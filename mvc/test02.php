<?php
//$test = 'data';

//var_dump($input = file_get_contents("php://input"));

//var_dump($_POST);
//
//var_dump($_ENV);
//
//var_dump($GLOBALS['_ENV']);

//var_dump($GLOBALS);

//phpinfo();

class A
{
    public static function foo()
    {
        static::who();
    }

    public static function who()
    {
        echo __CLASS__ . "\n";
    }
}

class B extends A
{
    public static function test()
    {
        A::foo();
        parent::foo();
        self::foo();
    }

    public static function who()
    {
        echo __CLASS__ . "\n";
    }
}

class C extends B
{
    public static function who()
    {
        echo __CLASS__ . "\n";
    }
}

C::test();