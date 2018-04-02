<?php
class UserController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	
	public function indexAction(){
	    $this->_view->_title = 'User Manager: List ';
	    $this->_view->Items = $this->_model->listItems($this->_arrParam,null);
		$this->_view->render('user/index');
		$this->_view->slbGroup = $this->_model->itemInSelectbox($this->_arrParam, null);
	}
	
	public function formAction(){
	    $this->_view->_title = 'User: Add';
	    $this->_view->slbGroup = $this->_model->itemInSelectbox($this->_arrParam, null);
	    if(isset($this->_arrParam['id'])){
	        $this->_view->_title = 'User: Edit';
	        $this->_arrParam['form'] = $this->_model->infoItem($this->_arrParam);
	        if(empty($this->_arrParam['form'])) URL::redirect('admin', 'user', 'index');// tra ve trang neu id kh dung
	    }
	    if(@$this->_arrParam['form']['token'] > 0){
	        $task = 'add';
	        $requirePass = true;
	        $queryUsername = "SELECT `id` FROM `".DB_User."` WHERE `username`  = '".@$this->_arrParam['form']['username']."'";
	        $queryEmail    = "SELECT `id` FROM `".DB_User."` WHERE `email`  = '".@$this->_arrParam['form']['email']."'";
	        if(isset($this->_arrParam['form']['id'])){
	            $task = 'edit';
	            $requirePass = false;
	            $queryUsername .= "AND `id` <> '".$this->_arrParam['form']['id']."'";
	            $queryEmail    .= "AND `id` <> '".$this->_arrParam['form']['id']."'";
	        }
	        $validate = new Validate($this->_arrParam['form']);  
	        $validate->addRule('username', 'string-notExistRecord', array('database' => $this->_model, 'query' => $queryUsername, 'min' => 3, 'max' => 20))
	                 ->addRule('email', 'email-notExistRecord',array('database' => $this->_model, 'query' => $queryUsername))
	                 ->addRule('password', 'password', array('action' => $task), $requirePass)
	                 ->addRule('status', 'status', array('deny' => array('default')))
	                 ->addRule('group_user_id', 'status', array('deny' => array('default')));
	        $validate->run();
	        $this->_arrParam['form'] = $validate->getResult();
	        if($validate->isValid() == false){
	            $this->_view->errors = $validate->showErrors();
	        }else{
	            //insert database
	            
	            $id = $this->_model->saveItem($this->_arrParam, array('task' => $task));
	            if($this->_arrParam['type'] == 'save-close')   URL::redirect('admin', 'user', 'index');
	            if($this->_arrParam['type'] == 'save-new')     URL::redirect('admin', 'user', 'form');
	            if($this->_arrParam['type'] == 'save')         URL::redirect('admin', 'user', 'form', array('id' => $id));
	        }
	    }
	    $this->_view->arrParam = $this->_arrParam;
	    $this->_view->render('user/form');
	}
	//ACTION : AJAX status(*)
	public function ajaxStatusAction(){
	    $result = $this->_model->changeStatus($this->_arrParam, array('task' => 'change-ajax-status'));
	    echo json_encode($result);
	}
	
	//ACTION : Status(*)
	public function statusAction(){
	    $this->_model->changeStatus($this->_arrParam, array('task' => 'change-status'));
	    URL::redirect('admin', 'user', 'index');
	}
	//ACTION : Trash (*)
	public function trashAction(){
	    $this->_model->deleteItem($this->_arrParam);
	    URL::redirect('admin', 'user', 'index');
	}
}