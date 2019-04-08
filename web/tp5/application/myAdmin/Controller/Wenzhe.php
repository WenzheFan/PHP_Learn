<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-07
 * Time: 16:18
 */

namespace app\myAdmin\Controller;


class Wenzhe
{
     public function home(){

//         // 放到对象池
         Register::set('site',factory::create());

         $obj = Register::get('site');

         var_dump($obj);
         echo '<hr>';
         echo $obj->siteName;
     }

}

class  Site{
//    属性
    public $siteName;
//
    protected static $instance = null;

    private function __construct($siteName)
    {
        $this->siteName = $siteName;
    }
    public static function  getInstance($siteName='PHP中文网'){
        if (!self::$instance instanceof self) {
            self::$instance = new  self($siteName);
        }
        return self::$instance;

    }

}
class factory {
    public static function create(){
        return Site::getInstance('www.php.cn');

    }

}
class  Register{
    protected static $objects = [];
    public static function  set( $alias,$objects){
        self::$objects[$alias] = $objects;
    }
    public static function  get( $alias){
        return    self::$objects[$alias];
    }

    public static function  _unset($alias){
        unset(self::$objects[$alias]);
    }
}

// 放到对象池
//Register::set('site',factory::create());
//
//$obj = Register::get('site');
//
//var_dump($obj);
//echo '<hr>';
//echo $obj->siteName;
