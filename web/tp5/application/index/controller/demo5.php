<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 23:18
 */

namespace app\index\controller;
use think\Db;

class demo5
{
    /*单条查询*/
    public function find(){
       /*Db 类
       数据库操作入口类
       静态调用
       1。table 选择数据标
       2。where 查询条件：表达式、数组
       3。find()返回符合条件的第一条记录
       4。field用来设置返回的字段
       */
//       $res = Db::table('websites')
////           ->field('id,name,url')
//           ->field(['id'=>'编号','name'=>'名称','url'=>'网址'])
//           ->where('id','=',4)
//           ->find();
        $res = Db::table('websites')
//           ->field('id,name,url')
//            ->field(['id'=>'编号','name'=>'名称','url'=>'网址'])
//            ->where('id',4)
            ->find(4);
       dump(is_null($res)?'没有找到':$res);



    }

    /*多条查询*/
    public  function select(){
        $res = Db::table('websites')
            ->where([
                ['country','=','CN'],
                ['alexa','>','3']
            ])->select();
        if(empty($res)){
           return "没有符合条件的数据";
        }else{
           foreach ($res as $row){
               dump($row);
            }
        }

    }

    /*单条插入*/
    public function insert(){
//        要插入数据
        $data=[
            'name'=>'可口可乐矿泉水',
            'url'=>'www.ganten.com.cn',
            'alexa'=>'6',
            'country'=>'CN'
        ];
//      return  Db::table('websites')->insert($data);

//        return  Db::table('websites')->insert($data,true);//只有Mysql数据库的时候
//        REPLACE INTO `websites` (`name` , `url` , `alexa` , `country`) VALUES ('农夫山泉矿泉水' , 'www.ganten.com.cn' , 6 , 'CN')

//        return Db::table('websites')->data($data)->insert(); // data中可以做一个过滤

        return  Db::table('websites')->insertGetId($data);



//

    }

    public  function  insertAll(){
        $data = [
            ['name'=>'京东', 'url'=>'www.jd.com.cn', 'alexa'=>'6', 'country'=>'CN'],
            ['name'=>'唯品会', 'url'=>'www.weipinhui.com.cn', 'alexa'=>'6', 'country'=>'CN'],
        ];
        return  Db::table('websites')->insertAll($data);
        return  Db::table('websites')->data($data)->insertAll();

    }

     public function update(){
//        return Db::table('websites')
//            ->where('id',17)
//            ->update(['name'=>'二点开']);
         return Db::table('websites')
             ->update(['name'=>'一点开','id'=>16]);

     }

     public  function  delete(){
        return Db::table('websites')
            ->delete('17');

     }

     public function query(){
        $sql = "SELECT `name`,`url` FROM `websites` WHERE `id` in (1,2,3)";
        dump(Db::query($sql));
     }
     public  function execute(){
//        return Db::execute("UPDATE `websites` SET `name`='主元素' WHERE `id`=15");
         return Db::execute("INSERT `websites` SET `name`='主元素'");
//         return Db::execute("DELETE FROM `websites` WHERE `id`='16'");
     }
}