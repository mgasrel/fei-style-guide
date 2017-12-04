$(document).ready(function() {
    $('.sample').append(function() {
        return '<pre class="sample-code"><code data-language="html">' + $(this).find('> .sample-html').html() + '</code></pre>';
    });

    Rainbow.color();

    $ ('.sidebar a[href*="#"]:not([href="#"])').click (
        function () {
            if (location.pathname.replace (/^\//, '') == this.pathname.replace (/^\//, '') && location.hostname == this.hostname) {
                var target = $ (this.hash);
                target = target.length ? target : $ ('[name=' + this.hash.slice (1) + ']');
                if (target.length) {
                    $ ('html, body').animate ({
                        scrollTop: target.offset ().top - target.css ("marginTop").replace ('px', '') - 50
                    }, 500);
                    return false;
                }
            }
        })
    ;

    $ ('a[data-toggle="collapse-menu"]').click (
        function () {
            $(this).parent().find('ul').toggleClass('in');
        }
    );

});