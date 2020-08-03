// Moment

$('.dateDisplay').each(function() {
    var datetime = $(this).attr("datetime");
    $(this).html( moment(datetime, "YYYYMMDD").fromNow() );
});