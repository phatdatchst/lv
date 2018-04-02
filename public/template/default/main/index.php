<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->_metaHTTP;?>
    <?php echo $this->_metaName;?>
    <?php echo $this->_title;?>
    <?php echo $this->_cssFiles;?>
    <?php echo $this->_jsFiles;?>
</head>
<body>
	<?php include_once 'html/header.php';?>
	
	<!-- body -->
	 <?php 
			require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
	 ?>

	<?php include_once 'html/footer.php';?>
</body>
</html>