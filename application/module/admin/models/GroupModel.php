<?php
class GroupModel extends Model{

    private $_columns = array('id','name','group_acp','created','created_by','modified','modified_by','status');
    public function __construct(){
        parent::__construct();
        $this->setTable(DB_GROUP);
    }
    
	public function listItems($arrParam, $Option = null){
		$query[] = "SELECT *";
		$query[] = "FROM $this->table";
		
		echo $query = implode(" ", $query);
		$result = $this->listRecord($query);
      
		return $result;
	}
	public function changeStatus($arrParam, $Option = NULL){
	    if($Option['task'] == 'change-ajax-status'){

	        $status = ($arrParam['status'] == 0) ? 1 : 0;
	        $id = $arrParam['id'];
	        $query = "UPDATE `$this->table` SET `status` = $status WHERE `id` = '" . $id . "'";
	        $this->query($query);      
	        return array($id, $status, URL::createLink('admin', 'group', 'ajaxStatus', array('id'=> $id, 'status'=> $status)));
	    }
	    if($Option['task'] == 'change-ajax-group-acp'){
	        // 	        echo '<pre>';
	        // 	            print_r($arrParam);
	        // 	            echo '</pre>';
	        $group_acp = ($arrParam['group_acp'] == 0) ? 1 : 0;
	        $id = $arrParam['id'];
	        $query = "UPDATE `$this->table` SET `group_acp` = $group_acp WHERE `id` = '" . $id . "'";
	        $this->query($query);         
	        return array($id, $group_acp, URL::createLink('admin', 'group', 'ajaxACP', array('id'=> $id, 'group_acp'=> $group_acp)));
	    }
	    if($Option['task'] == 'change-status'){
	        // 	        echo '<pre>';
	        // 	            print_r($arrParam);
	        // 	            echo '</pre>';
	        $status = $arrParam['type'];
	         if(!empty($arrParam['cid'])){
	             $ids = $this->createWhereDeleteSQL($arrParam['cid']);
	             $query = "UPDATE `$this->table` SET `status` = $status WHERE `id` IN ($ids)";
	             $this->query($query);
	             Session::set('message', array('class'=>'success', 'content' =>'<strong>Thành Công</strong> Có '.$this->affectedRows().' phần tử được thay đổi trạng thái'));         
	         }else{
	             Session::set('message', array('class'=>'danger', 'content' =>'Vui lòng chọn phần tử muốn thay đổi trạng thái'));
	         }
	    }
	}
	public function deleteItem($arrParam, $Option = NULL){
	    if($Option == null){
	        // 	        echo '<pre>';
	        // 	            print_r($arrParam);
	        // 	            echo '</pre>';
	       if(!empty($arrParam['cid'])){
	           $ids = $this->createWhereDeleteSQL($arrParam['cid']); 
	           $query = " DELETE FROM `$this->table` WHERE `id` IN ($ids)";
	           $this->query($query);
	           Session::set('message', array('class'=>'success', 'content' =>'<strong>Thành Công</strong> Có '.$this->affectedRows().' phần tử được xóa'));
	       }else{
	             Session::set('message', array('class'=>'danger', 'content' =>'Vui lòng chọn phần tử muốn xóa'));
	         }
	       
	    }
	    
	}
	//
	public function infoItem($arrParam, $Option = NULL){
	    if($Option == null){
	        $query[] = "SELECT `id`,`name`,`group_acp`, `status`";
	        $query[] = "FROM `$this->table`";
	        $query[] = "WHERE `id` = '" .$arrParam['id'] . "'";
	        $query = implode(" ", $query);
	        $result = $this->singleRecord($query);
	        return $result;
	        
	    }
	     
	}
	public function SaveItem($arrParam, $Option = NULL){
	    if($Option['task'] == 'add'){
	        $arrParam['form']['created'] = date('Y-m-d', time());
	        $arrParam['form']['created_by'] = 1;
	        $data = array_intersect_key($arrParam['form'], array_flip($this->_columns));
	        $this->insert($data);
	        Session::set('message', array('class'=>'success', 'content' =>'<strong>Thành Công</strong> Dữ liệu đã được lưu'));
	        return $this->lastID();
	    }
	    if($Option['task'] == 'edit'){
	        $arrParam['form']['modified'] = date('Y-m-d', time());
	        $arrParam['form']['modified_by'] = 10;
	        $data = array_intersect_key($arrParam['form'], array_flip($this->_columns));
	        $this->update($data, array(array('id', $arrParam['form']['id'])));
	        Session::set('message', array('class'=>'success', 'content' =>'<strong>Thành Công</strong> Dữ liệu đã được lưu'));
	        return $arrParam['form']['id'];
	    }
	}
	
	
}