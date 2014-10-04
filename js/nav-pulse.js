$( document ).ready( function() {
	$(".p-link").click( function() {
		var $num = $(".p-link").index(this);
		var $select = $(".pulse:eq(" + $num + ")");
		$select.siblings(".select").animate({marginBottom: "-=20px"}, "slow").removeClass("select");
		if ( !$select.hasClass('select') )
		{
			$select.animate({marginBottom: "+=20px"}, "slow").addClass("select");
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