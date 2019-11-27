<?php
namespace app\index\controller;
//导入系统类
use \think\Config;
use \think\Env;
class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    //test测试方法
    public function test(){
        return "我是index模块index控制器test方法";
    }

    public function test1(){
        return "我是test1方法";
    }

    public function test2(){
        return "我是test2方法";
    }

    public function course(){
        echo input('id');
    }

    public function time(){
        echo input('year').' '.input('month');
    }

    public function dongtai(){
        echo input('a').' '.input('b');
    }


















//#####################################################################################################################
    //读取配置文件
    public function getConfig(){
    	//系统函数配置文件
    	echo config('name');
    	//通过系统类读取配置
    	echo \think\Config::get('name');

    	dump(Config::get('kouhao'));


    	dump(Config('teacher.name'));
    	dump(Config('teacher.age'));

        dump(Config('app_name'));
    }

    //读取扩展配置,新建user.php扩展配置文件
    public function getExeConfig(){
        dump(Config('database.hostname'));
        dump(Config('database'));
        echo '<hr>';
        dump(Config('user.love'));

    }

    //读取应用场景配置
    //appliction下新建home.php，config.php修改app_status值
    public function getStatusConfig(){
        dump(Config('database'));
    }

    //读取模块配置
    //在index模块下新建config.php
    public function getModelConfig(){
        dump(Config('index'));
    }


    //动态配置
    public function setConfig(){
        //系统方法
        //config(变量名,变量名)
        dump(config('name'));
        config('name','金伦科技');
        dump(config('name'));
    }

    //配置文件加载：后面加载的配置，把前面加载匹配同名覆盖
    //array_merge($array1,$array2)
    
    //读取环境变量
    public function getEnv(){
        //系统类
        dump(\think\Env::get('name'));
        dump(\think\Env::get('abc','不存在'));

        dump(Env::get('aaa','9999'));
    }



}
