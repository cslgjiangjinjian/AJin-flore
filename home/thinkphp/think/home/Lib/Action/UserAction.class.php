<?php
	class UserAction extends  Action{
		public function index(){
			//$this -> display('Public:head');
			$this -> display();
			//$this ->display('Public:footer');
		}
		public function users(){
			$this ->assign('name','fs');
			$this ->display();
		}


	}
?>