<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 17:17
 */

Trait Demo1{
    public function hello(){
        return __METHOD__;
    }
}
Trait Demo2{
    public  function  hello(){
        return __METHOD__;
    }
}

Class test1 {
    public function hello(){
        return __METHOD__;
    }
}


class Demo extends test1 {
    use Demo1,Demo2{
//        Demo1::hello insteadof  Demo2;
        Demo2::hello as demo2hello;
        Demo1::hello as demo1hello;
    }
    public function hello(){
        return __METHOD__;
    }
    public function test1(){
        return $this->demo1hello();

    }
    public  function  test2(){
        return $this->demo2hello();
    }

}
$obj =new  Demo();
echo $obj->hello();
echo '<hr>';
echo $obj->test1();
echo '<hr>';
echo $obj->test2();