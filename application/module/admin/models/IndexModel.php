    <?php
class IndexModel extends Model{

   
    public function __construct(){
        parent::__construct();
        
    }
    
    public function infoItem($arrParam, $option = null){
        if($option == null){
            $username = $arrParam['form']['username'];
            $password = md5($arrParam['form']['password']);
            $query[] = "SELECT `u`.`id`, `u`.`fullname`, `u`.`email`, `u`.`group_user_id`, `g`.`group_acp` ";
            $query[] = "FROM `user` AS `u` LEFT JOIN `group_user` AS `g` ON `u`.`group_user_id` = `g`.`id`";
            $query[] = "WHERE `username` = '$username' AND  `password` = '$password'";
            
            $query = implode(" ", $query);
            $result = $this->listRecord($query);
		    return $result;
        }
    
    }
	
}