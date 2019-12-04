<?php 
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\Request;
//处理图片
use think\Image;

class Yzm extends Controller{

	public function index(){
		

		return view();

	}

	//处理验证码
	public function check(Request $request){

		$code = input('post.code');
		//判断验证码是否正确
		if(captcha_check($code)){
			echo "输入正确";
		}else{
			echo "输入错误";
		}
	}


	//图片处理
	public function img(){

		$images = Image::open("./img/4.jpg");

		//图片裁剪
		// $images->crop(300,300)->save("./img/caijian.jpeg");

		//图片缩放,填充
		$images->thumb(300,300)->save("./img/suofang4.jpg");

		//图片翻转
		$images->flip()->save("./img/fanzhuan.jpg");

		//添加图片水印,添加水印图片
		// $images->water("xx.jpg")->save("./img/water.jpg");
		//添加文字水印
		$images->text("yyf","simhei.ttf",20,"#ff0000")->save("./img/water.jpg");

		// return view();
	
	}
























}



 ?>