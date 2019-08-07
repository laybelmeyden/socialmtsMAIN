$(document).ready(function() {
    $(".button-collapse").sideNav();
});
$(document).ready(function() {
    $('#fullpage').fullpage({
        anchors: ['block1', 'block2', 'block3', 'block4', 'block5'],
        menu: '#menu',
        css3: true,
        scrollingSpeed: 1000,

    });
});