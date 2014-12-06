jQuery.fn.center = function () {
	this.css("position","absolute");
	this.css("top", ($(window).height() - this.height()) / 2+$(window).scrollTop() + "px");
	this.css("left", ($(window).width() - this.width()) / 2+$(window).scrollLeft() + "px");
	return this;
}
$(document).ready(function() {
	$("#thumbnail img").click(function(e){
		$("#polaroid-background").css({"opacity" : "0.7"})
						.fadeIn("slow");
		$("body").css("overflow", "hidden");
		$("#polaroid-large").html("<img src='"+$(this).parent().attr("href")+"' alt='"+$(this).attr("alt")+"' /><br/>"+$(this).attr("rel")+"")
				   .center()
				   .fadeIn("slow");
		return false;
	});
	$(document).keypress(function(e){
		if(e.keyCode==27){
			$("#polaroid-background").fadeOut("slow");
			$("#polaroid-large").fadeOut("slow");
		}
	});
	$("#polaroid-background, #polaroid-large").click(function(){
		$("body").css("overflow", "visible");
		$("#polaroid-background").fadeOut("slow");
		$("#polaroid-large").fadeOut("slow");
	});
});
function changeToRecordText(elem){
	document.getElementById("store-button").style.color = '#6B6B6B';
	document.getElementById("store-button").onmouseover = function() {
		document.getElementById("store-button").style.color = "#D40A0A";
	}

	document.getElementById("store-button").onmouseout = function() {
		document.getElementById("store1-button").style.color = "#6B6B6B";
	}
	elem.style.color = '#D40A0A';	

	document.getElementById("about-content").innerHTML = 'Here at Revival Records, we pride ourselves on having a wide variety of new and used vinyl to choose from. Although we cary a little bit of everything, our largest genres to choose from are pop and rock. Don&#39;t get discouraged if rock isn&#39;t your thing, we have a good sized collection of jazz, blues, reggae, folk, classical, soundtracks, country, kids and world music too. Most of the stacks at Revival Records are made up of used vinyl but we have a sizable stock of new vinyl and it&#39;s growing every week! Ask the staff about their favorite albums, new or old if you&#39;re looking to try something new. Oh yeah, and we&#39;ve got CDs too! A big way we build our collection of used vinyl and CDs is from people bringing in music to sell or trade. In addition to a great selection of vinyl, you can find all sorts of record accessories at Revival Records. We have cleaning supplies, protective inner and outer sleeves and frames for displaying your favorite records. And for those tough cleaning jobs we offer a professional cleaning service here at the store. Revival Records has an ever changing selection of home audio equipment. We have new and used turntables, receivers, speakers and pre-amps for sale. We also purchase used equipment for cash or trade if you are looking to upgrade your stereo.';
}

function changeToStoreText(elem){
	document.getElementById("record-button").style.color = '#6B6B6B';
	document.getElementById("record-button").onmouseover = function() {
		document.getElementById("record-button").style.color = "#D40A0A";
	}

	document.getElementById("record-button").onmouseout = function() {
		document.getElementById("record-button").style.color = "#6B6B6B";
	}
	elem.style.color = '#D40A0A';
	
	document.getElementById("about-content").innerHTML = 'Walking into Revival Records for the first time, one gets an overwhelming sense of community. It is a community of seekers, not only in the sense of finding the next great piece of nostalgia or favorite hit song, but seekers of ideas, movements and emotions, of like-minded ears and close friends. Old 45s hang from the ceiling as if to say those who enter have a common goal in preserving music and sharing it with others. The staff will share their favorite recent albums with you as if you are family, and the old phonograph player, displayed prominently on one shelf, is a reminder that what this store is selling goes beyond just goods. Revival Records is in the business of sharing the experience. Sifting through record crates and shelves, bringing a favorite album to the counter, and bringing it home to play for oneself and others is a timeless act that allows others to share their ideas within the Chippewa Valley community and beyond. Revival Records has created an atmosphere that promotes the sharing of the listening experience and feels like a lot more than a business, it feels like an extension of home.';
}