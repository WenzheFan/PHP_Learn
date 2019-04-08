<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 20:01
 */

namespace app\index\controller;

//Controller 没有静态代理
//控制器中的输出不用echo 用return 。复杂的用dump

//class demo3 extends \think\Controller
//{
//   public  function  test(){
//
////       创建一个request的静态代理
//
//       return "demo3==".'www.php.cn';
//   }
//
//}

 /*静态代理*/
//use think\facade\Request;
//class demo3 extends \think\Controller
//{
//    public  function  test(){
//
////       创建一个request的静态代理
//       dump( Request::get());
//
//    }
//
//}




//
///*依赖注入的方式*/
//use think\Request;
//class demo3 extends \think\Controller
//{
//    public  function  test(Request $request){
//
//        dump($request->get());
//
//    }
//
//}


///*父类的controller的依赖注入的方式*/
//
use think\response;
use think\Controller;
class demo3 extends Controller
{
    public  function  test(){

        dump($this->request->get());
//        dump();
//          return json_encod($this->request->get());
    }

}