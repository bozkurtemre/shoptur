/* Add here all your JS customizations */
$(function () {
    setNavigation();
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
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
            $("#page-header-title").text($(this).text());
            if ($('li.nav-parent.nav-expanded.nav-active .nav-link.parent-tab').text()) {
                $('#nav-alt-tab').append('<li><span>' + $('li.nav-parent.nav-expanded.nav-active .nav-link.parent-tab').text() + '</span></li>');
                $('#nav-alt-tab').append('<li><span>' + $(this).text() + '</span></li>');
            }
            else {
                $('#nav-alt-tab').append('<li><span>' + $(this).text() + '</span></li>');
            }
        }
    });
}
