@if (Session::has('message'))
<script>
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
</script>
@if(Session::has('type') == 'info')
<script>
    toastr.info('{{ session("message") }} ', 'Sistem');
</script>
@endif
@if(Session::has('type') == 'success')
<script>
    toastr.success('{{ session("message") }} ', 'Sistem');
</script>
@endif
@if(Session::has('type') == 'warning')
<script>
    toastr.warning('{{ session("message") }} ', 'Sistem');
</script>
@endif
@if(Session::has('type') == 'error')
<script>
    toastr.error('{{ session("message") }} ', 'Sistem');
</script>
@endif
@endif
