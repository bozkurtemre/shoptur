<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Admin</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="{{ asset('admin/css/fonts/poppins.css') }}" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('admin/vendor/modernizr/modernizr.js') }}"></script>

</head>

<body>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="javascript::void(0)" class="float-left">
                <img src="{{ asset('admin/img/logo.png') }}" height="54" alt="SmartCart" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign text-end">
                    <h2 class="m-0 title text-uppercase font-weight-bold"><i
                            class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Giriş Yap</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.login.post') }}" method="post">
                        @csrf
                        <div class="mb-3 form-group">
                            <label>Kullanıcı Adı</label>
                            <div class="input-group">
                                <input name="username" type="text" class="form-control form-control-lg" required />
                                <span class="input-group-text">
                                    <i class="bx bx-user text-4"></i>
                                </span>
                            </div>
                        </div>

                        <div class="mb-3 form-group">
                            <div class="clearfix">
                                <label class="float-left">Şifre</label>
                            </div>
                            <div class="input-group">
                                <input name="password" type="password" class="form-control form-control-lg" required />
                                <span class="input-group-text">
                                    <i class="bx bx-lock text-4"></i>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox" />
                                    <label for="RememberMe">Beni Hatırla</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-end">
                                <button type="submit" class="mt-2 btn btn-primary">Giriş</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="mt-3 mb-3 text-center text-muted">&copy; Copyright @php echo date("Y"); @endphp. Tüm Hakları
                Saklıdır.</p>
        </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="{{ asset('admin/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('admin/vendor/nanoscroller/nanoscroller.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('admin/js/theme.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('admin/js/theme.init.js') }}"></script>

</body>

</html>
