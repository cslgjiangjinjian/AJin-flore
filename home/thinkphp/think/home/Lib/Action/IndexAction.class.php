
<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
/*
 * application:为首页栏目分类
 * 更多展示:1
 * 明星拍摄:2
 * 机构招募:3
 * 行业明星:4
 * 机构推荐:5
 * */
    public function index(){
    	$userid = $this->_param('d');
		if(!empty($userid)){
			$User = M('User');
			$user_name = $User->where('Id="'.$userid.'"')->select();
			$outinfo_name = $user_name[0][username];
			$this->assign('outinfo_name',$outinfo_name);
			$outinfo_userid = $user_name[0][Id];
			$this->assign('outinfo_userid',$outinfo_userid);
			
		}
		//更多展示
		$Pictures = M('Pictures');
		$Album = M('Album');
		$show_more = $Album->table('uolor_pictures,uolor_album')->where('uolor_pictures.albumid = uolor_album.Id and uolor_pictures.application=1')->select();
		$this->assign('show_more',$show_more);
		//明星拍摄
		$msp = $Pictures->where('application=2')->select();
		$this->assign('msp',$msp);
		//机构招募
		$recruit = $Pictures->where('application=3')->select();
		$this->assign('recruit',$recruit);
		//行业明星
		$fieldsstar = $Pictures->where('application=4')->select();
		$this->assign('fieldsstar',$fieldsstar);
		//机构推荐
		$recommend = $Pictures->where('application=5')->select();
		$this->assign('recommend',$recommend);
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
		$userid = $this->_param('d');
		$User = M('User');
		if(!empty($userid)){
			$user_name = $User->where('Id="'.$userid.'"')->select();
			//print_r($user_name);
			$outinfo_name = $user_name[0][username];
			$this->assign('outinfo_name',$outinfo_name);
			$outinfo_userid = $user_name[0][Id];
			$this->assign('outinfo_userid',$outinfo_userid);
		}
		//个人信息
		$userinfo = $User->where('Id="'.$userid.'"')->select();
		$this->assign('userinfo',$userinfo[0]);
		//相册
		$Album = M('Album');
		$albums = $Album->where('userid="'.$userid.'"')->select();
		$this->assign('albums',$albums);
		$this->display();
	}
	public function works(){
		$userid = $this->_param('d');
		$User = M('User');
		if(!empty($userid)){
			$user_name = $User->where('Id="'.$userid.'"')->select();
			//print_r($user_name);
			$outinfo_name = $user_name[0][username];
			$this->assign('outinfo_name',$outinfo_name);
			$outinfo_userid = $user_name[0][Id];
			$this->assign('outinfo_userid',$outinfo_userid);
		}
		//个人信息
		$userinfo = $User->where('Id="'.$userid.'"')->select();
		$this->assign('userinfo',$userinfo[0]);
		//作品
		$albumid = $this->_param('ad');
		$Works = M('Pictures');
		$worklist = $Works->where('albumid="'.$albumid.'" and application is null')->select();
		//print_r($worklist);
		$this->assign('worklist',$worklist);
		//评论
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
	
	public function upload(){
		$userid = $this->_param('d');
		$User = M('User');
		if(!empty($userid)){
			$user_name = $User->where('Id="'.$userid.'"')->select();
			//print_r($user_name);
			$outinfo_name = $user_name[0][username];
			$this->assign('outinfo_name',$outinfo_name);
			$outinfo_userid = $user_name[0][Id];
			$this->assign('outinfo_userid',$outinfo_userid);
		}
		
		$this->display();
	}
	
	public function  uploadify(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath = './home/TPL/Public/images/works/';// 设置附件上传目录
		 if(!$upload->upload()) {// 上传错误提示错误信息
			  $this->error($upload->getErrorMsg());
		 	  echo "上传失败";
		 }else{// 上传成功 获取上传文件信息
			  $info =  $upload->getUploadFileInfo();
			  echo  '上传成功';
		 }
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