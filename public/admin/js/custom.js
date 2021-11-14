/* Add here all your JS customizations */
$(function () {
    setNavigation();
});

// Navigation Set
function setNavigation() {
    var path = window.location.pathname;
    path = decodeURIComponent(path);
    $(".nav.nav-main a").each(function () {
        var href = $(this)[0].pathname;
        if (path === href) {
            $(this).closest('.nav-parent').addClass('nav-expanded');
            $(this).closest('.nav-parent').addClass('nav-active');
            $(this).closest('li').addClass('nav-active');
            $("#active-tab").text($(this).text());
            $("#active-tab-alt").text($(this).text());
            if ($('li.nav-parent.nav-expanded.nav-active a#active-parent-tab').text()) {
                $('#nav-alt-tab').append('<li><span>' + $('li.nav-parent.nav-expanded.nav-active a#active-parent-tab').text() + '</span></li>');
                $('#nav-alt-tab').append('<li><span>' + $(this).text() + '</span></li>');
            }
            else {
                $('#nav-alt-tab').append('<li><span>' + $(this).text() + '</span></li>');
            }
        }
    });
}
