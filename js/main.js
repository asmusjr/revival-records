$(document).ready(function() {		// updates active link on navbar
	var path = location.pathname.split("/")[2];
	var li = $('#top-nav a[href$="' + path + '"]');
	if(li.length == 0) {
		$('#top-nav a[href$="index.php"]').parent().addClass('active');
		$('#animation-intro').modal();
	} else {
		li.parent().addClass('active');
		if(path == "record_catalog.php" || path == "my_records.php") {
			$("#nav-records").addClass('active');
		}
	}
});