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

$(function() {		// updates active link on navbar
	var li = $('#top-nav a[href$="' + location.pathname.split("/")[2] + '"]');
	if(li.length == 0) {
		$('#top-nav a[href$="index.php"]').parent().addClass('active');
	} else {
		li.parent().addClass('active');
	}
});