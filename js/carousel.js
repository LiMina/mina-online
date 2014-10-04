$( document ).ready( function() {
	$(".c-right").click( function() {
		var $num = $(".c-right").index(this);
		var $show = $(".c-wrap:eq(" + $num + ") img.c-show");
		console.log(".c-wrap:eq(" + $num + ") img.c-show");
		if ( $show.length == 0 ) $show = $(".c-wrap:eq(" + $num + ") IMG:last");
		var $next = $show.next().length ? $show.next()
			: $(".c-wrap:eq(" + $num + ") IMG:first");
		$show.addClass('c-hide').removeClass('c-show');
		$next.addClass('c-show').removeClass('c-hide');
	});
	$(".c-left").click( function() {
		var $num = $(".c-right").index(this);
		var $show = $(".c-wrap:eq(" + $num + ") img.c-show");
		if ( $show.length == 0 ) $show = $(".c-wrap:eq(" + $num + ") IMG:first");
		var $prev = $show.prev().length ? $show.prev()
			: $(".c-wrap:eq(" + $num + ") IMG:last");
		$show.addClass('c-hide').removeClass('c-show');
		$prev.addClass('c-show').removeClass('c-hide');
	});

});