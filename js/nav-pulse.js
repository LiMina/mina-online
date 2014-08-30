$( document ).ready( function() {
	$( ".pulse").click( function() {
		$(this).animate({height: "+=20px"}, "slow").addClass("select");
		$(this).siblings(".select").animate({height: "-=20px"}, "slow").removeClass("select");
	});
});