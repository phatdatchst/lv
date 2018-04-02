
  <?php require_once '../../admin/views/user/sidebar/index.php';?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <?php require_once '../../admin/views/user/toolbar/index.php';?>
   
   <?php 
         $dataform  = @$this->arrParam['form'];
         $inputUserName = Helper::cmsInput('text', 'username', 'form-control', 'form[username]', @$dataform['username']);
         $inputEmail = Helper::cmsInput('text', 'email', 'form-control', 'form[email]', @$dataform['email']);
         $inputFullname = Helper::cmsInput('text', 'fullname', 'form-control', 'form[fullname]', @$dataform['fullname']);
         $inputPassword = Helper::cmsInput('text', 'password', 'form-control', 'form[password]', @$dataform['password']);
         $inputToken = Helper::cmsInput('hidden', 'token', 'form-control', 'form[token]', time());
         $selectStatus = Helper::cmsSelectBox('form[status]', array('default' => '- Select status -', 1 => 'Public', 0 =>'Unpublic'),@$dataform['status']);
         $selectboxGroup = Helper::cmsSelectBox('form[group_user_id]', $this->slbGroup ,@$dataform['group_user_id']);
            //Row   
          $rowUserName = Helper::cmsRow('UserName', $inputUserName);
          $rowEmail = Helper::cmsRow('Email', $inputEmail);
          $rowFullname = Helper::cmsRow('FullName', $inputFullname);
          $rowPassword = Helper::cmsRow('Password', $inputPassword);
          $rowStatus = Helper::cmsRow('Status', $selectStatus);
          $rowSelectboxGroup = Helper::cmsRow('Group', $selectboxGroup);
          
          $inputID   = '';
          $rowID     = '';
          if(isset($this->arrParam['id']) || @$dataform['id'] ){
              $inputID = Helper::cmsInput('text', 'id', 'form-control', 'form[id]', $dataform['id']);
              $rowID = Helper::cmsRow('ID', $inputID);
          }
          
          $errors = isset($this->errors)?$this->errors : '';
          //message
          $message = Session::get('message');
          Session::delete('message');
          $StrMessage = Helper::cmsMessage($message);
   ?>
    
	<div class="container">
		<div class="row">
		<div class="col-xs-7">
			<div class="center">
			<div ><?php echo $errors;?></div>
				<form action="#" id="adminform" name="adminform" method="post">
				<div class="form-group">
					<?php echo $rowUserName .$rowEmail . $rowFullname. $rowPassword .$rowStatus . $rowSelectboxGroup .$rowID;?>
				</div>
				<div >
					<?php echo $inputToken;?>
				</div>
				
			</form>
			</div>
			
		</div>
			
		</div>
	</div>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->