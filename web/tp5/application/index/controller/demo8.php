<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-08
 * Time: 20:35
 */

namespace app\index\controller;

use think\Controller;
class demo8 extends Controller
{
    /*模版布局 全局模版继承*/
    public function  test1(){
        return $this->view->fetch();
    }
    /*模版继承*/
    public function  test2(){
        return $this->view->fetch();
    }
}