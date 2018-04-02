function getUrlVal(key){
	var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search);
	return result && unescape(result[1]) || "";
}

$(document).ready(function(){
	var controller = (getUrlVal('controller') == '') ? 'index' : getUrlVal('controller');
	var action     = (getUrlVal('action') == '') ? 'index' : getUrlVal('action');
	var classSelect = controller + '-' + action;
	console.log(classSelect);
	$('.menu-top ul li.' + classSelect).addClass('selected');
});