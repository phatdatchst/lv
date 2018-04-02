    <?php
class UserModel extends Model{

    private $_columns = array('id','username','email', 'fullname','password','created','created_by','modified','modified_by','status', 'group_user_id');
    public function __construct(){
        parent::__construct();
        $this->setTable(DB_User);
    }
    
	public function listItems($arrParam, $Option = null){
		$query[] = "SELECT `u`.`id`, `u`.`username`, `u`.`email`, `u`.`fullname`, `u`.`created`, `u`.`created_by`, `u`.`modified`, `u`.`modified_by`, `u`.`status`, `g`.`name` AS `group_name`";
		$query[] = "FROM $this->table AS `u`, `".DB_GROUP."` AS `g`";
		$query[] = "WHERE `u`.`group_user_id` = `g`.`id`";
	    $query = implode(" ", $query);
		$result = $this->listRecord($query);
		return $result;
	}
	public function changeStatus($arrParam, $Option = NULL){
	    if($Option['task'] == 'change-ajax-status'){
// 	        echo '<pre>';
// 	            print_r($arrParam);
// 	            echo '</pre>';
	        $status = ($arrParam['status'] == 0) ? 1 : 0;
	        $id = $arrParam['id'];
	        $query = "UPDATE `$this->table` SET `status` = $status WHERE `id` = '" . $id . "'";
	        $this->query($query);      
	        return array($id, $status, URL::createLink('admin', 'user', 'ajaxStatus', array('id'=> $id, 'status'=> $status)));
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
	        $query[] = "SELECT `id`,`username`,`email`,`fullname`,`status`, `group_user_id`";
	        $query[] = "FROM `$this->table`";
	        $query[] = "WHERE `id` = '" .$arrParam['id'] . "'";
	        $query = implode(" ", $query);
	        $result = $this->singleRecord($query);
	        return $result;
	        
	    }
	     
	}
	
	public function itemInSelectbox($arrParam, $Option = null){
	    if($Option == null){
	        $query[] = "SELECT `id`, `name`";
	        $query[] = "FROM `".DB_GROUP."`";
	        $query = implode(" ", $query);
	        $result = $this->fetchPairs($query);
	        return $result;
	         
	    }
	
	}
	public function SaveItem($arrParam, $Option = NULL){
	    if($Option['task'] == 'add'){
	        $arrParam['form']['created'] = date('Y-m-d', time());
	        $arrParam['form']['created_by'] = 1;
	        $arrParam['form']['group_user_id'] = 3;
	        $arrParam['form']['password'] = md5($arrParam['form']['password']);
	        $data = array_intersect_key($arrParam['form'], array_flip($this->_columns));
	        $this->insert($data);
	        Session::set('message', array('class'=>'success', 'content' =>'<strong>Thành Công</strong> Dữ liệu đã được lưu'));
	        return $this->lastID();
	    }
	    if($Option['task'] == 'edit'){
	        $arrParam['form']['modified'] = date('Y-m-d', time());
	        $arrParam['form']['modified_by'] = 10;
	        if($arrParam['form']['password'] != null){
	            $arrParam['form']['password'] = md5($arrParam['form']['password']);
	        }else{
	            unset($arrParam['form']['password']);
	        }
	        $data = array_intersect_key($arrParam['form'], array_flip($this->_columns));
	        $this->update($data, array(array('id', $arrParam['form']['id'])));
	        Session::set('message', array('class'=>'success', 'content' =>'<strong>Thành Công</strong> Dữ liệu đã được lưu'));
	        return $arrParam['form']['id'];
	    }
	}
	
	
}