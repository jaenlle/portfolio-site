$(document).ready(function () {

    $(function () {
        $('#menu').slicknav({
            label: '',
            duration: 600,
            prependTo: 'header',
        });

        $('.slicknav_menu').prepend('<a href src="/index.html"><img class="responsive-logo" src="../img/mylogo-grey.png" title="" /></a>');
    });

});
