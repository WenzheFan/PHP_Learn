<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 18:16
 */

namespace app\common;


class Temp
{
    private  $name;
    public function __construct($name='Perter')
    {
        $this->name = $name;
    }
    public  function  set($name){
        $this->name = $name;
    }
    public function  get(){
        return '方法是'.__METHOD__.'属性是：'.$this->name;
    }

}