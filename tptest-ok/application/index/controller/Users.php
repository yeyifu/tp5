<?php 
namespace app\index\controller;
use app\index\model\Users as ModelUsers;
use think\Controller;


class Users extends Controller{

	

	public function index(){
		$data = new ModelUsers;
		$res = $data->index();
		
		dump($res);
		// return view();
	}

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
}















 ?>