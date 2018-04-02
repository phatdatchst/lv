function changeStatus(url){
	$.get(url, function(data){
		console.log(data);
		/*
		 *  $xhtml = '<a id="status-'.$id.'"href="javascript:changeStatus(\''.$link.'\')" style="color: '.$color.'"> <i
                                    	class="'.$strStatus.'"></i></a>';
		 */
		var id = data[0];
		var status = data[1];
		var link = data[2];
		
		var element = 'a#status-' + id ;
		var classRemove = 'glyphicon glyphicon-ok-sign';
		var classAdd = 'glyphicon glyphicon-ban-circle';
		var color = 'red';
		if(status == 1){
			classRemove = 'glyphicon glyphicon-ban-circle';
			classAdd = 'glyphicon glyphicon-ok-sign';
			color = 'green';
		}
		$(element).attr('href', "javascript:changeStatus('"+ link +"')");
		$(element).attr('style', "color: "+color+"");
		$(element + ' i').removeClass(classRemove).addClass(classAdd);
	}, 'json');
}

function changeGroupACP(url){
	$.get(url, function(data){
		console.log(data);
		/*
		 *  $xhtml = '<a id="status-'.$id.'"href="javascript:changeStatus(\''.$link.'\')" style="color: '.$color.'"> <i
                                    	class="'.$strStatus.'"></i></a>';
		 */
		var id = data[0];
		var group_acp = data[1];
		var link = data[2];
		
		var element = 'a#group-acp-' + id ;
		var classRemove = 'glyphicon glyphicon-ok-sign';
		var classAdd = 'glyphicon glyphicon-ban-circle';
		var color = 'red';
		if(group_acp == 1){
			classRemove = 'glyphicon glyphicon-ban-circle';
			classAdd = 'glyphicon glyphicon-ok-sign';
			color = 'green';
		}
		$(element).attr('href', "javascript:changeGroupACP('"+ link +"')");
		$(element).attr('style', "color: "+color+"");
		$(element + ' i').removeClass(classRemove).addClass(classAdd);
	}, 'json');
}
function submitForm(url){
	$('#adminform').attr('action', url);
	$('#adminform').submit();
}

$(document).ready(function(){
	$('input[name=checkall-toggle]').change(function(){
		var checkStatus = this.checked;
		$('#adminform').find(':checkbox').each(function(){
			this.checked = checkStatus;
		})
	})
})