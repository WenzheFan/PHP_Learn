<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 20:42
 */

namespace app\index\controller;


use think\Db;


/*
 * 数据库连接方式
 *
 * 1.全局配置:config/database
 *
 * 2.动态配置
 *
 * 3.DSN连接：数据库类型：//用户名:密码@数据库地址:端口号/数据库名称#字符集
 * */
class demo4
{
    /*全局配置*/
    public function conn1(){
       return  Db::table('websites')
            ->where('id',1)
            ->value('name');

    }

    /*动态配置*/

    public function  conn2(){
        return  Db::connect(['type'=>'mysql',
                'hostname'=>'localhost',
                'database'=>'wenzhe',
                'username'=>'root',
                'password'=>'523935Qq'])
            ->table('websites')
            ->where('id',2)
            ->value('name');

    }

    /*DSN配置*/
    /**
     *
     */
    public function conn3(){
        $dsn = 'mysql://root:523935Qq@localhost:8889/wenzhe#utf8';
        return  Db::connect($dsn)
            ->table('websites')
            ->where('id',3)
            ->value('name');

    }


}