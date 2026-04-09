$(function () {
    $('.head__lang[data-set-lang]').on('click', function (e) {
        e.preventDefault();
        var lang = $(this).data('set-lang');
        if (lang !== 'ru' && lang !== 'en') {
            return;
        }
        var maxAge = 365 * 24 * 60 * 60;
        var secure = window.location.protocol === 'https:';
        document.cookie = 'site_lang=' + lang + '; path=/; max-age=' + maxAge + '; SameSite=Lax' + (secure ? '; Secure' : '');
        window.location.reload();
    });

    $('.menu__link[href^="#"]').on('click', function (e) {
        var id = $(this).attr('href'),
            target = id && id.length > 1 ? $(id) : $(),
            headerHeight = $('.head').outerHeight() + 20,
            topValue;
        if (!target.length) {
            return;
        }
        e.preventDefault();
        topValue = Math.floor(target.offset().top - headerHeight);
        $('html, body').stop().animate({scrollTop: topValue + 'px'});
    });
});

