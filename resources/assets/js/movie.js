$( document ).ready(function() {
    console.log('starting');
    $( "body" ).on( "click", ".movieblock", function() {
        var overlayclass = 'movieinfo'+$(this).data('id');
        console.log(overlayclass);
        var overlay = $(overlayclass);
        overlay.css('opacity', '1');
        overlay.css('height', '100%');
    });
});