<?php
defined('IN_TS') or die('Access Denied.');
class feed extends tsApp{

	var $db;

	public function __construct($dbhandle){
		$this->db = $dbhandle;
	}
	
	//添加feed
	function addFeed($userid,$template,$data){
		$userid = intval($userid);
		$data = addslashes($data);
		$this->db->query("insert into ".dbprefix."feed (`userid`,`template`,`data`,`addtime`) values ('$userid','$template','$data','".time()."')");
	}
	
	//析构函数
	public function __destruct(){
		
	}
	
}