<?php 
namespace app\index\controller;
use think\Controller;
use think\Db;
//导入请求类
use think\Request;
class User extends Controller{

	//首页，分页
	public function index(){
		$data = Db::table("user")->paginate(3);
		$this->assign("data",$data);
		return view();
	}


	//文件上传
	public function add(){


		return view();

	}

	//单文件文件上传处理
	public function upload(Request $request){
		$file = $request->file('file');
		//进行文件上传
		if($info = $file->move("./upload/")){
			dump($info->getsaveName());
		}else{
			dump($info->getError());
		}
		// dump($file);

	}


	//多文件上传
	public function adds(){


		return view();
	}


	//多文件上传处理
	public function uploads(Request $request){
		//接受上传信息
		$files = $request->file('file');
		//处理
		foreach ($files as $file) {
			if($info = $file->move("./upload/")){
				dump($info->getsaveName());
			}else{
				dump($info->getError());
			}
		}
	}
















}





 ?>