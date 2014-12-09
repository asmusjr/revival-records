$(document).ready(function() {		// updates active link on navbar
	var path = location.pathname.split("/")[3];
	var li = $('#top-nav a[href$="' + path + '"]');
	if(li.length == 0) {
		$('#top-nav a[href$="index.php"]').parent().addClass('active');
	} else {
		li.parent().addClass('active');
	}
});