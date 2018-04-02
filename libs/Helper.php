<?php

class Helper
{
    // create button
    public static function cmsButton($link, $icon, $name, $type = 'new')
    {
        $xhtml = '';
        if($type == 'new'){
            $xhtml .= '<a href="' . $link . '"
            style="float: right; margin-left: 20px;">
            <i class="' . $icon . '"></i><small>' . $name . '</small></a>';
        }else if($type == 'submit'){
             $xhtml .= '<a href="#" onclick="javascript:submitForm(\''.$link.'\');"
            style="float: right; margin-left: 20px;">
            <i class="' . $icon . '"></i><small>' . $name . '</small></a>';
        }
            
        return $xhtml;
    }
    
    // create icon status
    public static function cmsStatus($statusValue , $link, $id)
    {
        $color = ($statusValue == 0) ? 'red' : 'green';
        $strStatus = ($statusValue == 0) ? 'glyphicon glyphicon-ban-circle' : 'glyphicon glyphicon-ok-sign';
        $xhtml = '<a id="status-'.$id.'"href="javascript:changeStatus(\''.$link.'\')" style="color: '.$color.'"> <i
                                    	class="'.$strStatus.'"></i></a>';
        return $xhtml;
    }
    // create icon group ACP
    public static function cmsGroupACP($groupAcpValue , $link, $id)
    {
        $color = ($groupAcpValue == 0) ? 'red' : 'green';
        $strGroupACP = ($groupAcpValue == 0) ? 'glyphicon glyphicon-ban-circle' : 'glyphicon glyphicon-ok-sign';
        $xhtml = '<a id="group-acp-'.$id.'"href="javascript:changeGroupACP(\''.$link.'\')" style="color: '.$color.'"> <i
                                    	class="'.$strGroupACP.'"></i></a>';
        return $xhtml;
    }
    //create select box
    public static function cmsSelectBox($name, $arrValue, $keySelect = 'default')
    {
        $xhtml = '<select class="form-control" id="sel1" name="'.$name.'">';
        foreach($arrValue as $key => $value){
            if($key == $keySelect){
                $xhtml .= '<option selected="selected" value ="'.$key.'">'.$value.'</option>';
            }else{
                $xhtml .= '<option value ="'.$key.'">'.$value.'</option>';
            }
        }
        $xhtml .= '</select>';
        return $xhtml;
    }
    // create input
    public static function cmsInput($type, $id, $class, $name, $value = null)
    {
        $xhtml = "<input type='$type' class='$class' id='$id' name='$name' value='$value'>";
        return $xhtml;
    }
    // create row - admin
    public static function cmsRowForm($lbName, $input)
    {
        $xhtml = '<label for="pwd">'.$lbName.'</label>'.$input.'';
        return $xhtml;
    }
    // create row - public
    public static function cmsRow($lbName, $input, $submit = false)
    {
        if($submit == false){
            $xhtml = '<div class="form-group"><strong>'.$lbName.'</strong></label> '.$input.'</div>';
        }else{
            $xhtml = '<div class="form-group">'.$input.'</div>';
        }
        
        return $xhtml;
    }
    // format date
    public static function formatDate($format, $value)
    {
        $result = "";
        if (! empty($value) && $value != "0000-00-00") {
            $result = date($format, strtotime($value));
        }
        return $result;
    }
    // create icon status
    public static function cmsMessage($message)
    {
        $xhtml = '';
        if(!empty($message)){
                $xhtml = '<div class="alert alert-'.$message['class'].'">
                      				 '.$message['content'].'
                   			</div>';
            }
            echo $xhtml;
            return $xhtml;
    }
}
