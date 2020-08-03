// HTML5 Player

$(document).on('click', '.player-area', function (e) {
    var $this = $(this)

    if ($this.is('a')) e.preventDefault()

    $this.empty();
    $this.append('<iframe class="embed-responsive-item" src="'+$this.data('playerSrc')+'" width="500" height="375"></iframe>');
        console.log( 'loading iFrame player: '+$this.data('playerSrc') );
})