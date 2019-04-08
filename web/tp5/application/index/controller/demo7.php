<?php
/**
 * Created by PhpStorm.
 * User: wenzhefan
 * Date: 2019-04-08
 * Time: 15:42
 */

namespace app\index\controller;

use think\Controller;
use  think\facade\View;
class demo7 extends Controller
{
    public  function  test1(){
        $content = '<h3 style="color:orchid">哈哈， PHP 中文网欢迎你</h3>';
//        return $this->display($content); //封装了很多细节性的东西，不建议使用
//        return $this->view-$this->display($content);
        return View::display($content);
    }
    public  function test2(){
        //模版变量复制 assign()

        // 1。普通变量
        $this->view->assign('name','Wenzhe Fan');
        $this->view->assign('age','60');

        //批量赋值
        $this->view->assign([
            'sex'=>'男',
            'salary'=>666
        ]);
        //2.array
        $this->view->assign('goods',[
           'id'=>1,
            'name'=>'华为',
            'model'=>'mate10',
            'price'=>9999
        ]);


        //3.object
        $obj=new \stdClass();
        $obj->course = 'PHP';
        $obj->letuce = 'Peter zhu';
        $this->view->assign('info',$obj);

        return $this->view->fetch();
    }
    public function test3(){
        $data = \app\model\websites::all();
        $this->view->assign('data',$data);
        return $this->view->fetch();
    }
    public  function test4(){
        // 获取分页查询的pagenate方法
        //每页显示五条
        $data = \app\model\websites::paginate(5);
        $this->view->assign('data',$data);
        return $this->view->fetch();
    }

}