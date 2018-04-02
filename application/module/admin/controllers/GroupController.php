<?php
class GroupController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	
	public function indexAction(){
	    $this->_view->_title = 'User Group: List';
	    $this->_view->Items = $this->_model->listItems($this->_arrParam,null);
		$this->_view->render('group/index');
	}
	
	public function formAction(){
	    $this->_view->_title = 'User Group: Add';
	    if(isset($this->_arrParam['id'])){
	        $this->_view->_title = 'User Group: Edit';
	        $this->_arrParam['form'] = $this->_model->infoItem($this->_arrParam);
	        if(empty($this->_arrParam['form'])) URL::redirect('admin', 'group', 'index');// tra ve trang neu id kh dung
	    }
	    if(@$this->_arrParam['form']['token'] > 0){
	        $validate = new Validate($this->_arrParam['form']);
	        $validate->addRule('name', 'string', array('min' => 3, 'max' => 255))
	                 ->addRule('status', 'status', array('deny' => array('default', 1)))
	                 ->addRule('group_acp', 'status', array('deny' => array('default')));
	        $validate->run();
	        $this->_arrParam['form'] = $validate->getResult();
	        if($validate->isValid() == false){
	            $this->_view->errors = $validate->showErrors();
	        }else{
	            //insert database
	            $task = (isset($this->_arrParam['form']['id'])) ? 'edit' : 'add';
	            $id = $this->_model->saveItem($this->_arrParam, array('task' => $task));
	            if($this->_arrParam['type'] == 'save-close')   URL::redirect('admin', 'group', 'index');
	            if($this->_arrParam['type'] == 'save-new')     URL::redirect('admin', 'group', 'form');
	            if($this->_arrParam['type'] == 'save')         URL::redirect('admin', 'group', 'form', array('id' => $id));
	        }
	    }
	    $this->_view->arrParam = $this->_arrParam;
	    $this->_view->render('group/form');
	}
	//ACTION : AJAX status(*)
	public function ajaxStatusAction(){
	    $result = $this->_model->changeStatus($this->_arrParam, array('task' => 'change-ajax-status'));
	    echo json_encode($result);
	}
	
	//ACTION : AJAX Group ACP(*)
	public function ajaxACPAction(){
	    $result = $this->_model->changeStatus($this->_arrParam, array('task' => 'change-ajax-group-acp'));
	    echo json_encode($result);
	}
	//ACTION : Status(*)
	public function statusAction(){
	    $this->_model->changeStatus($this->_arrParam, array('task' => 'change-status'));
	    URL::redirect('admin', 'group', 'index');
	}
	//ACTION : Trash (*)
	public function trashAction(){
	    $this->_model->deleteItem($this->_arrParam);
	    URL::redirect('admin', 'group', 'index');
	}
}