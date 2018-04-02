 <?php 
 
    $linkGroup = URL::createLink('admin', 'group', 'index');
    $linkAddGroup = URL::createLink('admin', 'group', 'add');
    $linkUser = URL::createLink('admin', 'user', 'index');
    $linkAddUser= URL::createLink('admin', 'user', 'add');
 ?>
 
  <aside class="main-sidebar">
    <section class="sidebar"> 
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Group</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $linkGroup;?> "><i class="fa fa-circle-o"></i> Group</a></li>
	         <li class="active"><a href="<?php echo $linkAddGroup;?> "><i class="fa fa-circle-o"></i>Add New Group</a></li> !-->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>User</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $linkUser;?>"><i class="fa fa-circle-o"></i> User</a></li>
            <li class="active"><a href="<?php echo $linkAddUser;?>"><i class="fa fa-circle-o"></i> Add New User</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>