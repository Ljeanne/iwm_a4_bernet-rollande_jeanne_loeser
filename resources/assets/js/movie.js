$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
    }
});

$( document ).ready(function() {
    var body = $( "body" );
    body.on( "mouseover", ".movieblock", function() {
        var overlayclass = 'movieinfo'+$(this).data('id');
        var overlay = $('.'+overlayclass);
        overlay.css('opacity', '1');
        overlay.css('height', '100%');
    });
    body.on( "mouseleave", ".movieblock", function() {
        var overlayclass = 'movieinfo'+$(this).data('id');
        var overlay = $('.'+overlayclass);
        overlay.css('opacity', '0');
        overlay.css('height', '0');
    });

    // When clicking on "I want to see this movie
    body.on( "click", ".link-0", function(e) {
        e.preventDefault();
        var form = $('#tosee'+$(this).data('movie'));
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            async: false,
            success: function( data ) {
                $('.form-btn-'+data).removeClass('active');
                $('.link-'+'0'+'.form-btn-'+data).addClass('active');
            }
        });
        return false;
    });

    // When clicking on "I have seen this movie
    body.on( "click", ".link-1", function(e) {
        e.preventDefault();
        var form = $('#seen'+$(this).data('movie'));
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            async: false,
            success: function( data ) {
                $('.form-btn-'+data).removeClass('active');
                $('.link-'+'1'+'.form-btn-'+data).addClass('active');
            }
        });
        return false;
    });


    // Search bar
    $('#searchbar').on('keypress', function (e) {
        if(e.keyCode  === 13 && $(this).val()){
            window.location.replace($(this).data('path')+'/'+$(this).val());
        }
    });
});