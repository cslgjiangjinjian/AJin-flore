
<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$userid = $this->_param('d');
		if(!empty($userid)){
			$User = M('User');
			$user_name = $User->where('Id="'.$userid.'"')->field('username')->select();
			//print_r($user_name);
			$outinfo_name = $user_name[0][username];
			$this->assign('outinfo_name',$outinfo_name);
		}
		$Pictures = M('Pictures');
		$show_more = $Pictures->where('albumid=16')->select();
		$this->assign('show_more',$show_more);
		//print_r($show_more);
		
		//echo $userid;
    	//添加数据
/*		$User = M('User');
		$data = array(
			'username'		=>'php试一试',
			'sex'			=>'1',
			'localplace'	=>'苏州',
			'labels' 		=>'摄影',
			'connection'	=>'2582253358@qq.com',
			'datetime'		=>'2015-3-12',
			'password'		=>md5('123'),
			
		);
		echo $User->add($data);
		echo $User->getLastSql();*/
		//echo date('y-m-d h:i:s',time());
		$this -> display();
    }
	//批量添加数据
/*	public function addAll(){
		$User = M('User');
		$data = array(
			array(''=>'',''=>'',''+''),
			array(''=>'',''=>'',''+''),
		);
		adump($User->addAll($data));
	}*/
	//更新数据
	public function up(){
		$user = M('User');
		$data = array('username'=>'pog');
		$list = $user->where('Id=101')->save($data);
		print_r($user->find(101));
		dump($list);
	}
/*	public function upall(){
		
	}*/
	
	public function album(){
		$this->display();
	}
	public function works(){
		$Comment = M('Comment');
		$list = $Comment->where('picturesid=1')->getField('id,userid,content');
		$this->assign('list',$list);
		//print_r($list);
		
		//添加评论
		if(!empty($_GET['content'])){
			//print_r($_GET);
			$data = array(
			'content'	=> $_GET['content'],
			'userid'	=> '1',
			'datetime'  => date('y-m-d h:i:s',time()),
			'picturesid'=> '1',
			'albumid'   => '1'
			);
			if($Comment->add($data)){
				$this->success('添加成功!');
			}else{
				$this->error('添加失败！');
			}
		}
		$this->display();
	}
	public function add(){
		
	}
		
	public function login(){
		$User = M('User');
		$email = $_POST['email'];
		$password = $_POST['password'];
		if(!empty($email)){
			$user_info = $User->where('connection="'.$email.'"')->select();
			if(!empty($user_info)){
				$out_password = $user_info[0][password];
				$out_id = $user_info[0][Id];
				echo $out_id;
				if($password ==$out_password){
					$this->success('','Index/index?d='.$out_id.'');
				}else{
					echo "密码有误，请重新确认并输入！";
				}
			}else{
				echo "登录失败,请确认邮箱是否正确！";
			}
			
			
			
		}
		
		$this->display();
	}
	
	
	
	
	
	
	
	
	
	
	
	
/*	public function test(){
		$i = '我正在学经适房凉快';
		$this ->assign('phpa',$i);

		$this->display('Index:index');  	//模板调用
	}*/

/*	//前置操作
	public function _before_index(){
		echo '这里是前置方法';
	}
	//后置方法
	public function _after_index(){
		echo '这是后置方法';
	}*/
	
}