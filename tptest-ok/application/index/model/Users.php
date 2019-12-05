<?php 
namespace app\index\model;
use think\Db;
use think\Model;



class Users extends Model{

	// public function setTimeAttr(){
	// 	return time();
	// }
	protected $auto = [];
	//添加数据，字段自动赋值
	protected $autoWriteTimestamp = true;
	protected $insert = ["status"=>1];
	//修改数据，字段自动赋值
	protected $update = [];
	//获取首页显示数据
	
	protected function initialize(){
		parent::initialize();
		$this->table='user';
	}
	public function index(){
		$user = Db::table('user')->select();
		return $user;
	}

	//添加单条数据
	public function add($data){
		//实例化users模型类，users模型类与数据表一致
		$user = model('users');
		//添加数据到数据库
		return $user->save($data);
	}
}



 ?>