<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
//导入缓存类
use think\Cache;
//导入session类
use think\Session;

class Index extends controller{


    public function index()
    {
        $data = Db::table("user")->select();
        //1.设置缓存,过期时间为200s
        // dump(Cache::set("UserData",$data,200));
        //助手函数设置
        // dump(cache("data",$data,200));
        // dump($data);
        

        //2.读取缓存
        // dump(Cache::get("data"));
        dump(cache("UserData"));
        
        //3.删除缓存
        // Cache::rm("UserData");
        // cache("UserData",NULL);
        
        //4.清空缓存
        dump(Cache::clear());
        
    }



    //缓存使用
    public function huancun(){
    	if($data = cache("UserData")){
    		echo "缓存获取";
    	}else{
    		$data = Db::table("user")->select();
    		cache("UserData",$data,5);
    		echo "数据库获取";
    	}

    	$this->assign('data',$data);
    	return view();
    }


    //设置session
    public function setSession(){
    	 dump(Session::set("name",'叶一夫'));
    	// 助手函数
    	// dump(session('username','yyf',5));
    }

    //获取session
    public function getSession(){
    	// dump(Session::get("name"));
    	// 助手函数
    	dump(session("name"));
    }

    //判断session
    public function pSession(){
    	// dump(Session::has('username'));
    	// 助手函数
    	dump(session("?name"));
    }

    //删除session
    public function delSession(){
    	// dump(Session::delete("username"));
    	// 助手函数
    	dump(session("username",null));
    }

    //退出，清空session
    public function clearSession(){
    	// dump(Session::clear());
    	dump(session(null));
    }











}












