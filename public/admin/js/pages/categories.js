(function ($) {

    'use strict';

    var datatableInit = {

        options: {
            table: '#datatable-categories',
            dialog: {
                wrapper: '#deleteDialog',
                cancelButton: '#deleteCancel',
                confirmButton: '#deleteConfirm',
            }
        },

        initialize: function () {
            this
                .setVars()
                .build()
                .events();
        },

        setVars: function () {
            this.$table = $(this.options.table);

            // dialog
            this.dialog = {};
            this.dialog.$wrapper = $(this.options.dialog.wrapper);
            this.dialog.$cancel = $(this.options.dialog.cancelButton);
            this.dialog.$confirm = $(this.options.dialog.confirmButton);

            return this;
        },

        build: function () {
            this.datatable = this.$table.DataTable({
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

            window.dt = this.datatable;

            return this;
        },

        events: function () {
            var _self = this;

            this.$table
                .on('click', 'a.remove-row', function (e) {
                    e.preventDefault();

                    var $row = $(this).closest('tr'),
                        itemId = $row.attr('data-item-id');

                    $.magnificPopup.open({
                        items: {
                            src: _self.options.dialog.wrapper,
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in',
                            modal: true
                        },
                        preloader: false,
                        modal: true,
                        callbacks: {
                            change: function () {
                                _self.dialog.$confirm.on('click', function (e) {
                                    e.preventDefault();
                                    $.ajax({
                                        url: '/admin/store/category/delete/' + itemId,
                                        method: 'GET',
                                        success: function (data) {
                                            toastr.success(data.message, 'Sistem');
                                            _self.rowRemove($row);
                                        },
                                        error: function () {
                                            toastr.error(data.message, 'Sistem');
                                        }
                                    });
                                    $.magnificPopup.close();
                                });
                            },
                            close: function () {
                                _self.dialog.$confirm.off('click');
                            }
                        }
                    });
                });

            this.dialog.$cancel.on('click', function (e) {
                e.preventDefault();
                $.magnificPopup.close();
            });

            return this;
        },

        rowRemove: function ($row) {
            this.datatable.row($row.get(0)).remove().draw();
        },
    };

    $(function () {
        datatableInit.initialize();
    });

}).apply(this, [jQuery]);
