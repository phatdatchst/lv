
  <?php require_once '../../admin/views/group/sidebar/index.php';?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <?php require_once '../../admin/views/group/toolbar/index.php';?>
   
   <?php 
         $dataform  = @$this->arrParam['form'];
         $inputName = Helper::cmsInput('text', 'name', 'form-control', 'form[name]', @$dataform['name']);
         $inputToken = Helper::cmsInput('hidden', 'token', 'form-control', 'form[token]', time());
         $selectStatus = Helper::cmsSelectBox('form[status]', array('default' => '- Select status -', 1 => 'Public', 0 =>'Unpublic'),@$dataform['status']);
         $selectGroupACP = Helper::cmsSelectBox('form[group_acp]', array('default' => '- Select group acp -', 1 => 'Yes', 0 =>'No'),@$dataform['group_acp']);
            //Row   
          $rowName = Helper::cmsRow('Name', $inputName);
          $rowStatus = Helper::cmsRow('Status', $selectStatus);
          $rowGroupACP = Helper::cmsRow('Group ACP', $selectGroupACP);
          
          $inputID   = '';
          $rowID     = '';
          if(isset($this->arrParam['id'])){
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
					<?php echo $rowName . $rowStatus . $rowGroupACP .$rowID;?>
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