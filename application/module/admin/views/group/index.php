

  <?php require_once '../../admin/views/group/sidebar/index.php';?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php require_once '../../admin/views/group/toolbar/index.php';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <?php 
//             $message = Session::get('message');
//             Session::delete('message');
//             $StrMessage = Helper::cmsMessage($message);
            
//             ?>
                
         		 <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="#" method="post" name="adminform" id="adminform">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                	<th width ="1%"><input type="checkbox" name="checkall-toggle" value="onclick"></th>
                	<th width ="10%">ID</th>
                  <th width ="10%">Name</th>
                  <th width ="10%">Status</th>
                  <th width ="10%">Group ACP</th>
                  <th width ="10%">Created</th>
                  <th width ="10%">Created by</th>
                  <th width ="10%">Modified</th>
                  <th width ="10%">Modified by</th>
                  
                  <th>Sửa</th>
                  <th>Xóa</th>
                  
                </tr>
                
                </thead>
                <tbody>
               	<?php 
                    if(!empty($this->Items)){
                        foreach ($this->Items as $key => $value){
                            $id = $value['id'];
                            $ckb = '<input type="checkbox" name="cid[]" value="'.$id.'" />';
                            $name = $value['name'];           
                            //index.php?module=admin&controller=group&action=ajaxStatus&Id=2&Status=0
                            $status = Helper::cmsStatus($value['status'], URL::createLink('admin', 'group', 'ajaxStatus', array('id'=> $id, 'status'=> $value['status'])), $id);
                            $group_acp = Helper::cmsGroupACP($value['group_acp'], URL::createLink('admin', 'group', 'ajaxACP', array('id'=> $id, 'group_acp'=> $value['group_acp'])), $id);
                            $created = Helper::formatDate('d-m-Y', $value['created']);
                            $modified = Helper::formatDate('d-m-Y', $value['modified']);
                            $created_by = $value['created_by'];
                            $modified_by = $value['modified_by'];         
                            $linkEdit  = URL::createLink('admin', 'group', 'form', array('id' => $id));
                  ?>
               <tr >
               			<td class="center"><?php echo $ckb?> </td>
						<td class="center"><?php echo $id?> </td>
						<td><?php echo $name;?></td>
						<td style="text-align: center;"><?php echo $status?></td>
						<td style="text-align: center;"><?php echo $group_acp?></td>
						<td><?php echo $created?></td>
						<td><?php echo $created_by?></td>
						<td><?php echo $modified?></td>
						<td><?php echo $modified_by?></td>
						
						<td class="center"><a href="<?php echo $linkEdit?>"
							class="btn btn-primary glyphicon glyphicon-edit" ></a></td>
						<td class="center"><a
							class="btn btn-danger glyphicon glyphicon-remove"></a></td>
				</tr>
				
                <?php
                    }
                }
                ?>
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->