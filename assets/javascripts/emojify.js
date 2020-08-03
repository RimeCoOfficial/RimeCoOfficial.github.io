// Twitter Emoji

function emojifyText (btns) {
    btns.each(function (i, o) {
        var string = $(o).html();
        // console.log(string);
        
        var emojified = twemoji.parse(string);
        // console.log(emojified);

        $(o).html(emojified);

        $(o).removeClass('emojify');
    })
}

function emojifyInit() { emojifyText($('.emojify')) }
$(function() { emojifyInit() });