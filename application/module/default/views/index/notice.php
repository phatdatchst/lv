<?php 
    $message = '';
    switch ($this->arrParams['type']){
        case 'register-success':
            $message = 'Đăng kí tài khoản thành công. ';
            break;
        case 'not-permission':
            $message = 'Bạn không có quyền truy cập ';
            break;
    }
?>
<div id="divResizeReg" class="wpage_lightbox" style="height: 240px;">
	<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-push-3 mt-50">
					<div class="alert alert-success">
                    	<?php
                    	   echo $message;
                        ?>
					</div>
				</div>
			</div>
	</div>
</div>
