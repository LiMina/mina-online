$( document ).ready( function() {
	$("#class-toggle").click( function() {
		$(".other").toggle();
	});
	$(".class-title").click( function() {
		var index = $(".class-title").index(this);
		$(".description").each(function() {
			$(this).css("display", "none");
		})
		$(".description:eq(" + index + ")").fadeIn();
	});
	$(".description").click( function() {
		$(this).hide("slow");
	});
});