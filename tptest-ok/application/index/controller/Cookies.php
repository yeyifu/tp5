<?php 
namespace app\index\controller;
use think\Controller;
use think\Cookie;
class Cookies extends Controller{


	public function index(){

	}

	//设置cookies
	public function setCookie(){
		Cookie::set("name",'一号互联');
		Cookie::set("city",'深圳市',10);
		//助手函数
		cookie("username","admin",60);
	}

	//获取cookie
	public function getCookie(){
		// dump(Cookie::get("username"));
		//助手函数
		// dump(cookie("name"));
	}

	//判断cookie是否存在
	public function Pcookie(){
		// dump(Cookie::has("name"));
		// 助手函数
		dump(cookie("?name"));
		// dump(Cookie::has("username"));
		dump(cookie("?username"));
	}




}






































 ?>