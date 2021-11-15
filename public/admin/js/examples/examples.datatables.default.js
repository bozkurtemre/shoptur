/*
Name: 			Tables / Advanced - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	4.0.0
*/

(function ($) {

    'use strict';

    var datatableInit = function () {

        $('#datatable-default').dataTable({
            dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
            language: {
                "sProcessing": "İşleniyor...",
                "sLengthMenu": "Sayfada _MENU_ Kayıt Göster",
                "sZeroRecords": "Eşleşen Kayıt Bulunmadı",
                "sInfo": "  _TOTAL_ Kayıttan _START_ - _END_ Arası Kayıtlar",
                "sInfoEmpty": "Kayıt Yok",
                "sInfoFiltered": "( _MAX_ Kayıt İçerisinden Bulunan)",
                "sInfoPostFix": "",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "İlk",
                    "sPrevious": "Önceki",
                    "sNext": "Sonraki",
                    "sLast": "Son"
                }
            }
        });

    };

    $(function () {
        datatableInit();
    });

}).apply(this, [jQuery]);
