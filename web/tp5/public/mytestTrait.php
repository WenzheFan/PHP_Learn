<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 16:53
 */

Trait Demo1{
    public function hello1(){
        return __METHOD__;
    }
}
Trait Demo2{
    public  function  hello2(){
        return __METHOD__;
    }
}


class Demo{
    use Demo1,Demo2;
    public function hello(){
        return __METHOD__;
    }
    public function test1(){
        return $this->hello1();

    }
    public  function  test2(){
        return $this->hello2();
    }

}
$obj =new  Demo();
echo $obj->hello();
echo '<hr>';
echo $obj->test1();
echo '<hr>';
echo $obj->test2();

