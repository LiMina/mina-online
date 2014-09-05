function slideSwitch() {
    var $active = $('#splash IMG.active');

    if ( $active.length == 0 ) $active = $('#splash IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#splash IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$( document ).ready( function() {
    setInterval( "slideSwitch()", 3000 );
});