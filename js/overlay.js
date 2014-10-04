$( document ).ready( function() {
	$("img.art").click( function() {
		$("div.overlay").css("display", "initial");
		$("div.carousel:eq(0)").css("display", "initial");
		var $show = $(".draw img.c-show");
		if ( $show.length == 0 ) $show = $("div.carousel:eq(0) .c-wrap IMG:eq(0)");
		$show.addClass("c-show").removeClass("c-hide");
	});
	$("img.photos").click( function() {
		$("div.overlay").css("display", "initial");
		$("div.carousel:eq(1)").css("display", "initial");
		var $show = $(".photo img.c-show");
		if ( $show.length == 0 ) $show = $("div.carousel:eq(1) .c-wrap IMG:eq(0)");
		$show.addClass("c-show").removeClass("c-hide");
	});
	$("img.self-portraits").click( function() {
		$("div.overlay").css("display", "initial");
		$("div.carousel:eq(2)").css("display", "initial");
		var $show = $(".portrait img.c-show");
		if ( $show.length == 0 ) $show = $("div.carousel:eq(2) .c-wrap IMG:eq(0)");
		$show.addClass("c-show").removeClass("c-hide");
	});
	$("img.modeling").click( function() {
		$("div.overlay").css("display", "initial");
		$("div.carousel:eq(3)").css("display", "initial");
		var $show = $(".model img.c-show");
		if ( $show.length == 0 ) $show = $("div.carousel:eq(3) .c-wrap IMG:eq(0)");
		$show.addClass("c-show").removeClass("c-hide");
	});
	$(".exit").click( function() {
		$("div.overlay").css("display", "none");
		$("div.carousel").css("display", "none");
		$(".c-show").addClass("c-hide").removeClass("c-show");
	});
});