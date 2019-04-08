<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 19:04
 */

namespace app\index\controller;


//use app\common\Test;

use app\face\Test;


class demo2
{
   public function index($name='ThinkPHP'){
//       动态访问
//     $test =  new \app\common\Test();
//     return $test->hello();
//      静态访问，需要代理
//      动态绑定
       \think\Facade::bind('app\face\Test','app\common\Test');

       return  Test::hello('fanwenzhe');
//




   }

}