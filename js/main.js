$(document).ready(function(){
  $("#jquery_jplayer_1").jPlayer({
	ready: function () {
	  $(this).jPlayer("setMedia", {
		title: "Test song",
		m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
		oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
	  });
	},
	swfPath: "js/jQuery.jPlayer.2.7.0",
	supplied: "m4a, oga"
  });
});

// $('#myModal').modal();
// to-do: check if index
//			check if mobile
//			check if visitor's first time visiting site ?

$(document).ready(function() {		// updates active link on navbar
	var path = location.pathname.split("/")[2];
	var li = $('#top-nav a[href$="' + path + '"]');
	if(li.length == 0) {
		$('#top-nav a[href$="index.php"]').parent().addClass('active');
	} else {
		li.parent().addClass('active');
		if(path == "record_catalog.php" || path == "my_records.php") {
			$("#nav-records").addClass('active');
		}
	}
});