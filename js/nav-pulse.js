$( document ).ready( function() {
	$( ".pulse").click( function() {
		$(this).siblings(".select").animate({height: "-=20px"}, "slow").removeClass("select");
		$(this).animate({height: "+=20px"}, "slow").addClass("select");
	});
});