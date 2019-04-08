<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 18:21
 */

namespace app\index\controller;


class demo1{
/*
 * url 访问 http://tp5.com:8888/index/demo1/getname/name/fanwenzhe
 * name -->key
 * fanwenzhe-->value
 *
 *
 * */
    public function getName($name='Petter'){
        return 'Hello'.$name;
    }
/*
 * \app\common\Temp $temp 触发依赖注入
 * */
    public function getMethod(\app\common\Temp $temp){
//        $temp = new  \app\common\Temp();
        $temp->set('PHP中文网');
        return $temp->get();


    }
    /*
     * 绑定一个类到容器
     *
     * */
    public function bindClass(){

        //把类注册到容器中
        \think\Container::set('temp','\app\common\Temp');

        //将容器中的类实例化：可以调用构造器初始化

       $temp =  \think\Container::get('temp',['name'=>'fanwenzhe']);
        return $temp->get();
    }

    public function bindClosure(){

        //把类注册到容器中
        \think\Container::set('demo',function ($domain){
            return "PHP中文网的域名是".$domain;
        });

        //将容器中的类实例化：可以调用构造器初始化

        return $temp =  \think\Container::get('demo',['domain'=>'www.php.cn']);
//        return $temp->get();
    }
}