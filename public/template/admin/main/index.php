<!DOCTYPE html>
<html>
<head>
  	  <?php echo $this->_metaHTTP;?>
	  <?php echo $this->_metaName;?>
   	  <title><?php echo $this->_title;?></title>
      <link rel="stylesheet" href="public/template/admin/main/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="public/template/admin/main/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="public/template/admin/main/plugins/datatables/dataTables.bootstrap.css">
      <link rel="stylesheet" href="public/template/admin/main/dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="public/template/admin/main/dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<?php include_once 'html/header.php';?>
 	<?php require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';?>
    <?php include_once 'html/footer.php';?>
</div>
<script src="public/template/admin/main/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="public/template/admin/main/bootstrap/js/bootstrap.min.js"></script>
<script src="public/template/admin/main/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/template/admin/main/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="public/template/admin/main/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="public/template/admin/main/dist/js/app.min.js"></script>
<script src="public/template/admin/main/dist/js/demo.js"></script>
<?php echo $this->_jsFiles;?>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
