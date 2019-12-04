<?php 
namespace app\index\controller;
use app\index\model\Users as ModelUsers;
use think\Controller;


class Users extends Controller{
	// protected $user = new ModelUsers;
	// $this->$users = $users;
	//显示首页
	public function index(){
		//实例化Users数据模型
		$data = new ModelUsers;
		//调用Users模型index方法
		$res = $data->index();
		
		// dump($res);
		return view();
	}

	//添加一条数据，调用Users模型add()
	public function insert(){
		$post = [
			'name' => 'yyy',
			'age'  => 5
		];
		$users = new ModelUsers;
		echo time();
		// exit;
		$code = $users->add($post);
		dump($code);
	}

	//修改一条数据，调用Users模型update()方法
	public function update(){
		$data = [
			'id'=>'4',
			'name'=>'yeyifu',
			'age'=>'23',
			'status'=>0
		];
		$code = model('users')->update($data);
		dump($code);
	}

	//删除一条数据
	public function delete(){
		$id = 7;
		$code = model('users')->destroy($id);
		dump($code);
	}

}















 ?>