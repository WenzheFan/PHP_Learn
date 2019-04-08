<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-08
 * Time: 11:24
 */

namespace app\index\controller;

use  app\index\model\websites;
use think\Db;
/*模型和一张数据表绑定的*/
class demo6
{
    public function get(){
       dump( websites::get(3));

       $res = websites::field('id,name,url')
           ->where('id',9)
           ->find();
       dump($res);


        $res2 = Db::table('websites')
            ->field('id,name,url')
            ->where('id',9)
            ->find();
       dump($res2);

       dump(is_array($res2));

    }

    public function all(){

//        $res = websites::field('id,name,url')
//            ->where('id',9,'3,4,5')
//            ->select();
//        dump($res);


        dump(websites::all());
    }
}