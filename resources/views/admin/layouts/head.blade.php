<!-- Basic -->
<meta charset="UTF-8">

<title>@yield('title', 'SmartCart')</title>

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Web Fonts  -->
<link href="{{ asset('admin/css/fonts/poppins.css') }}" rel="stylesheet" type="text/css">

<!-- Vendor CSS -->
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/animate/animate.compat.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/magnific-popup/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/toastr/toastr.min.css') }}" />

<!-- Specific Page CSS -->
@yield('css')

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}" />

<!-- Skin CSS -->
<link rel="stylesheet" href="{{ asset('admin/css/skins/default.css') }}" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

<!-- Head Libs -->
<script src="{{ asset('admin/vendor/modernizr/modernizr.js') }}"></script>

<!-- Extra -->
@yield('extra-css')
