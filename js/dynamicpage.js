$(function () {

    var newHash = "",
        $mainContent = $("#main-content"),
        $pageWrap = $("#page-wrap"),
        baseHeight = 0,
        $el;

    $pageWrap.height($pageWrap.height());
    baseHeight = $pageWrap.height() - $mainContent.height();

    $("nav").delegate("a", "click", function () {
        window.location.hash = $(this).attr("href").replace(".html", "");
        return false;
    });

    $(window).bind('hashchange', function () {

        newHash = window.location.hash.substring(1);

        if (newHash) {
            $mainContent
                .find("#content")
                .fadeOut(200, function () {
                    $mainContent.hide().load(newHash + " #content", function () {
                        $mainContent.fadeIn(200, function () {
                            $pageWrap.height(
                                baseHeight + $mainContent.height() + "px"
                            );
                        });
                        $("nav a").removeClass("current");
                        $("nav a[href='" + newHash + "']").addClass("current");
                    });
                });
        };

    });

    $(window).trigger('hashchange');

});