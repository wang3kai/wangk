<?php
namespace app\home\ctrl;
use core\lib\model;
use core\wangk;
use core\lib\conf;
use app\home\model\helloModel;
use core\lib\ctrl;

class helloCtrl extends Ctrl{

	public function __construct(){
		
	}

	public function index(){

		//数据库
		//$model = new model();
//pdo方式
// 		$sql = "select * from php34_brand";
// 		$prepareData = $model->query($sql);
// 		$data = $prepareData->fetchAll();
// p($data);

//medoo方式
		//$data = $model->select('php34_hello',['id'],['id[>]'=>1]);
//dump($data);
						
		//测试配置文件
// 		$data = Conf::get('CTRL','config');	
// 		$data2 = Conf::get('HI','config');	
// p($data);
// p($data2);
		//分配数据
		// $data = 'hello php';
		// $music = 'laugh cloud';
		// $this->assign('data',$data);
		// $this->assign('music',$music);	
		//查找视图
		//$this->display('hello/index');

		//链接model测试
		//$model = new helloModel();
		//$rst = $model->getList();
		//$rst = $model->getOne(1);
		//$rst = $model->setOne(100,['name'=>'wangwu3']);
		//$rst = $model->deleteOne(2);
		//dump($rst->rowCount());
		
		//twig模板
		$data = 'hello php';
		$this->assign('data',$data);
		$this->display('hello/index');
	}

	public function add(){

		//twig模板
		$data = 'hello php';
		$this->assign('data',$data);
		$this->display('hello/add');

	}

	public function save(){
		//dump($this);
		//p($_POST);
		$rst = $this->rst(1,'ok',$_POST);
		p($rst);
		//$this->redirect('index');
	}
}

