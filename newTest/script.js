$(document).ready(function () {
    console.log('workingg');

    $('#one').click(function (e) { 
        e.preventDefault();
            $('body').css('background','#FE657D');
    });
    $('#two').click(function (e) { 
        e.preventDefault();
            $('body').css('background','#FCB2A9');
    });
    $('#three').click(function (e) { 
        e.preventDefault();
            $('body').css('background','#FCB2A9');
    });
    $('#four').click(function (e) { 
        e.preventDefault();
            $('body').css('background','#94E4C9');
    });
    $('#five').click(function (e) { 
        e.preventDefault();
            $('body').css('background','#509B7D');
    });
});