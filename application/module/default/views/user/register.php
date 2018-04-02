<?php 

    $dataform = @$this->arrParam['form'];

    $inputUsername = Helper::cmsInput('text', 'username', 'form-control', 'form[username]', @$dataform['username'] );
    $inputFullname = Helper::cmsInput('text', 'fullname', 'form-control', 'form[fullname]', @$dataform['fullname'] );
    $inputPassword = Helper::cmsInput('password', 'password', 'form-control', 'form[password]', @$dataform['password'] );
    $inputEmail = Helper::cmsInput('email', 'email', 'form-control', 'form[email]', @$dataform['email'] );
    $inputSubmit = Helper::cmsInput('submit', 'submit', 'btn btn-primary', 'form[submit]' ,  'Đăng Kí', true);
    $inputToken = Helper::cmsInput('hidden', 'token', 'form-control', 'form[token]', time());
    
    
    $rowUsername  = Helper::cmsRow('Username', $inputUsername);
    $rowFullname  = Helper::cmsRow('Fullname', $inputFullname);
    $rowPassword = Helper::cmsRow('Password', $inputPassword);
    $rowEmail = Helper::cmsRow('Email', $inputEmail);
    $rowSubmit = Helper::cmsRow('Đăng Kí', $inputToken. $inputSubmit, true);
    
    $linkAction = URL::createLink('default', 'user', 'register');
    
    $error = isset($this->errors)? $this->errors : '';
?>
<div id="divResizeReg" class="wpage_lightbox" style="height: 485px;">	
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-push-3 mt-50">
				<div class="title_lightbox text-center" style="">
			<label>ĐĂNG KÍ</label><a href="javascript:;"
				onclick="return NCTLogin.buttonCloseNew();" class="light_close"></a>
			</div>
				<?php echo $error;?>
				<form name="adminform" action="<?php echo $linkAction;?>" method="POST">			
					<?php echo  $rowUsername .$rowFullname  .$rowPassword .$rowEmail  .$rowSubmit;?>	
				</form>
				</div>
			
			</div>
		</div>

	</div>