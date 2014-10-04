$( document ).ready( function() {
	$(".pulse").click( function() {
		$(this).siblings(".select").animate({marginBottom: "-=20px"}, "slow").removeClass("select");
		if ( !$(this).hasClass('select') )
		{
			$(this).animate({marginBottom: "+=20px"}, "slow").addClass("select");
		}
	});
	$(".home").click(function(){
		$(".pulse.select").each(function(){
			if ( $(this).hasClass('select') )
			{
				$(this).animate({marginBottom: "-=20px"}, "slow").removeClass("select");
			}
		});
	});
});