<?php 
    //Button New
    $linkNew = URL::createLink('admin','user' , 'form');
    $btnNew = Helper::cmsButton($linkNew, 'glyphicon glyphicon-plus-sign', 'New');
    
    //Button Public
    $linkPublic = URL::createLink('admin', 'user', 'status', array('type' => 1));
    $btnPublic = Helper::cmsButton($linkPublic, 'glyphicon glyphicon-ok-circle', 'Public','submit');
    
    //Button Unpublic
    $linkUnPublic = URL::createLink('admin', 'user', 'status', array('type' => 0));
    $btnUnPublic = Helper::cmsButton($linkUnPublic, 'glyphicon glyphicon-ban-circle', 'UnPublic','submit');
    
    //Button Trash
    $linkTrash = URL::createLink('admin', 'user', 'trash');
    $btnTrash = Helper::cmsButton($linkTrash, 'glyphicon glyphicon-trash', 'Trash','submit');
    
    //Button Save
    $linkSave = URL::createLink('admin', 'user', 'form', array('type' => 'save'));
    $btnSave = Helper::cmsButton($linkSave, 'glyphicon glyphicon-saved', 'Save','submit');
    
    //Button Save & Close
    $linkSaveclose = URL::createLink('admin', 'user', 'form', array('type' => 'save-close'));
    $btnSaveclose = Helper::cmsButton($linkSaveclose, 'glyphicon glyphicon-floppy-saved', 'Save & Close','submit');
    
    //Button Save & New
    $linkSaveNew = URL::createLink('admin', 'user', 'form', array('type' => 'save-new'));
    $btnSaveNew = Helper::cmsButton($linkSaveNew, 'glyphicon glyphicon-floppy-open', 'Save & New','submit');
    
    //Button Cancel
    $linkCancel = URL::createLink('admin', 'user', 'index');
    $btnCancel = Helper::cmsButton($linkCancel, 'glyphicon glyphicon-remove-circle', 'Cancel');
    
    switch ($this->arrParams['action']){
        case 'index' :
            $strButton = $btnTrash .$btnUnPublic .$btnPublic .$btnNew;
            break;
        case 'form' :
            $strButton =  $btnCancel .$btnSaveNew  . $btnSaveclose .$btnSave;
            break;
    }
?>
<section class="content-header">
<h1>
<?php echo $this->_title;?>
		<?php echo $strButton;?>	
		
      </h1>
      
    </section>