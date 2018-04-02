<?php
class UserController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	
	public function registerAction(){
	    if(isset($this->_arrParam['form']['submit'])){
	        URL::checkRefreshPage($this->_arrParam['form']['token'], 'default', 'user', 'register');
	        $queryUsername = "SELECT `id` FROM `".DB_User."` WHERE `username`  = '".@$this->_arrParam['form']['username']."'";
	        $queryEmail    = "SELECT `id` FROM `".DB_User."` WHERE `email`  = '".@$this->_arrParam['form']['email']."'";
	        
	        $validate = new Validate($this->_arrParam['form']);
	        $validate->addRule('username', 'string-notExistRecord', array('database' => $this->_model, 'query' => $queryUsername, 'min' => 3, 'max' => 20))
        	         ->addRule('email', 'email-notExistRecord',array('database' => $this->_model, 'query' => $queryUsername))
        	         ->addRule('password', 'string', array('action' => 'add', 'min' => 6, 'max' => 20));
	        $validate->run();        
	        $this->_arrParam['form'] = $validate->getResult();
	        if($validate->isValid() == false){
	            $this->_view->errors = $validate->showErrorsPublic();
	        }else{
	            //insert database
	            $id = $this->_model->saveItem($this->_arrParam, array('task' => 'user-register'));
	            URL::redirect('default', 'index', 'notice',array('type'=>'register-success'));
	            
	        }
	    }
	    
	    $this->_view->render('user/register');
	}
}