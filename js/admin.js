$(document).ready(function() {		// updates active link on navbar
	var path = location.pathname.split("/")[3];
	var li = $('#top-nav a[href$="' + path + '"]');
	if(li.length == 0) {
		$('#top-nav a[href$="index.php"]').parent().addClass('active');
	} else {
		li.parent().addClass('active');
	}
	
	CKEDITOR.config.allowedContent = true;
	CKEDITOR.config.contentsCss = [CKEDITOR.basePath + 'contents.css', '../css/master.css'];
});

function populate(recordID, artistName, recordName, recordYear, genre){
	var recordID = recordID;
	var artistName = artistName;
	var recordName = recordName;
	var recordYear = recordYear;
	var genre = genre;
	
	$('#record_id').val(recordID);
	$('#artist_name').val(artistName);
	$('#record_name').val(recordName);
	$('#record_year').val(recordYear);
	$('#record_genre').val(genre);            
}