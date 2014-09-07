$( document ).ready( function() {
	$(".c-right").click( function() {
		var $show = $("img.c-show");
		if ( $show.length == 0 ) $show = $(".c-wrap IMG:last");
		var $next = $show.next().length ? $show.next()
			: $(".c-wrap IMG:first");
		$show.addClass('c-hide').removeClass('c-show');
		$next.addClass('c-show').removeClass('c-hide');
	});
	$(".c-left").click( function() {
		var $show = $("img.c-show");
		if ( $show.length == 0 ) $show = $(".c-wrap IMG:first");
		var $prev = $show.prev().length ? $show.prev()
			: $(".c-wrap IMG:last");
		$show.addClass('c-hide').removeClass('c-show');
		$prev.addClass('c-show').removeClass('c-hide');
	});

});