<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-06
 * Time: 22:04
 */

namespace app\admin\controller;
//use think\facade\Config; // cofig类依赖

use think\Config;

class User
{
    public function get(){

//         获取配置项
//       dump(Config::get()); ////  获取全部配置项
//       dump(Config::get('app.'));// 获取某个配置项
//       dump(Config::pull('app'));// 推荐使用方法

//       查询配置项
        dump(Config::has('default_lang'));

//      获取二级配置项
        dump(Config::get('database.hostname'));
        dump(Config::get('app_debug'));
    }

    public function  set(){
//        动态设置，静态设置就是直接修改配置文件
        dump(Config::get('app_debug'));
        Config::set('app_debug',true);
        dump(Config::get('app_debug'));

        dump(Config::get('database.hostname'));

    }

    public function helper(){
//        dump(Config());
//        dump(Config('default_module')); // 获取默认配置项
////        dump(Config('?database.username')); // 查询配置项是否存在
//        dump(Config('database.username'));  // 获取配置项

        dump(Config('database.hostname'));
        dump(Config('database.username','localhost'));
    }

}