    <?php
class UserModel extends Model{

    private $_columns = array('id',
        'username',
        'email', 
        'fullname',
        'password',
        'created',
        'created_by',
        'modified',
        'modified_by',
        'status',
         'group_user_id');
    public function __construct(){
        parent::__construct();
        $this->setTable(DB_User);
    }
    
    public function SaveItem($arrParam, $Option = NULL){
        if($Option['task'] == 'user-register'){
            $arrParam['form']['group_user_id'] = 3;
            $arrParam['form']['status'] = 1;
            $arrParam['form']['password'] = md5($arrParam['form']['password']);
            $data = array_intersect_key($arrParam['form'], array_flip($this->_columns));
            $this->insert($data);
            Session::set('message', array('class'=>'success', 'content' =>'<strong>Thành Công</strong> Dữ liệu đã được lưu'));
            return $this->lastID();
        }
        
    }
    
	
}