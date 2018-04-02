<?php 
    $message = '';
    switch (@$this->arrParam['type']){
        case 'register-success':
            $message = 'Đăng kí tài khoản thành công. ';
            break;
    }
?>
<div id="divResizeReg" class="wpage_lightbox" style="height: 240px;">
	<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-push-3 mt-50">
					<div class="alert alert-danger">
                    	<?php
                    	   echo '<strong>Thất bại</strong> Tài khoản bị giới hạn quyền truy cập.'
                        ?>
					</div>
				</div>
			</div>
	</div>
</div>
