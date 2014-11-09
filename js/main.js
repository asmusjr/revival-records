$(function() {
	var li = $('#top-nav a[href$="/' + location.pathname.split("/")[2] + '"]');
	if(li.length == 0) {
		$('#top-nav a[href$="index.php"]').parent().addClass('active');
	} else {
		li.parent().addClass('active');
	}
})