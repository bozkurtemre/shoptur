@extends('admin.layouts.master')
@section('title', 'Anasayfa')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/vendor/jquery-ui/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/jquery-ui/jquery-ui.theme.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/morris/morris.css') }}" />
@endsection
@section('content')
<section class="body">
    <!-- start: page -->
    <div class="row">
        <div class="mb-3 col-lg-6">
            <section class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="chart-data-selector" id="salesSelectorWrapper">
                                <h2>
                                    Sipariş:
                                    <strong>
                                        <select class="form-control" id="salesSelector">
                                            <option value="week" selected>Ay</option>
                                            <option value="year">Yıl</option>
                                        </select>
                                    </strong>
                                </h2>

                                <div id="salesSelectorItems" class="mt-3 chart-data-selector-items">
                                    <div class="chart chart-sm" data-sales-rel="week" id="flotDashSales1"
                                        class="chart-active" style="height: 190px;"></div>
                                    <script>
                                        var flotDashSales1Data = [{
                                            data: [
                                                ["Oca", 0],
                                                ["Şub", 0],
                                                ["Mar", 0],
                                                ["Nis", 0],
                                                ["May", 0],
                                                ["Haz", 0],
                                                ["Tem", 0],
                                                ["Ağu", 0],
                                                ["Eyl", 0],
                                                ["Eki", 0],
                                                ["Kas", 0],
                                                ["Ara", 0]
                                            ],
                                            color: "#0088cc"
                                        }];

                                    </script>

                                    <div class="chart chart-sm" data-sales-rel="year" id="flotDashSales2"
                                        class="chart-hidden" style="height: 185px;"></div>
                                    <script>
                                        var flotDashSales2Data = [{
                                            data: [
                                                ["2021", 0],
                                                ["2022", 0],
                                            ],
                                            color: "#2baab1"
                                        }];

                                    </script>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <div class="mb-3 row">
                <div class="col-xl-6">
                    <section class="mb-3 card card-featured-left card-featured-primary">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fas fa-life-ring"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Bekleyen Mesajlar</h4>
                                        <div class="info">
                                            <strong class="amount">0</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="#">(Hepsini Gör)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xl-6">
                    <section class="card card-featured-left card-featured-primary">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Toplam Sipariş</h4>
                                        <div class="info">
                                            <strong class="amount">0 TL</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="#">(Tüm Siparişler)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <section class="mb-3 card card-featured-left card-featured-primary">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Bugün Gelen Sipariş</h4>
                                        <div class="info">
                                            <strong class="amount">0</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xl-6">
                    <section class="card card-featured-left card-featured-primary">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Bugün Gelen Ziyaretçi</h4>
                                        <div class="info">
                                            <strong class="amount">0</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-xl-12">
            <section class="card">
                <header class="card-header card-header-transparent">
                    <h2 class="card-title">Son Siparişler</h2>
                </header>
                <div class="card-body">
                    <table class="table mb-0 table-responsive-md table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sipariş No</th>
                                <th>Ad Soyad</th>
                                <th>Telefon</th>
                                <th>Semt</th>
                                <th>Şehir</th>
                                <th>Durum</th>
                                <th>Tarih</th>
                                <th>Detay</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-xl-6">
            <section class="card">
                <header class="card-header card-header-transparent">
                    <h2 class="card-title">Son Aktiviteler</h2>
                </header>
                <div class="card-body">
                    <div class="mt-3 mb-3 timeline timeline-simple">
                        <div class="tm-body">
                            <div class="tm-title">
                                <h5 class="pt-2 pb-2 m-0 text-uppercase">Aralık 2021</h5>
                            </div>
                            <ol class="tm-items">
                                <li>
                                    <div class="tm-box">
                                        <!-- <p class="mb-0 text-muted">1 saat önce</p> -->
                                        <p>Site Kuruldu.</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-12 col-xl-6">
            <section class="card">
                <header class="card-header card-header-transparent">
                    <h2 class="card-title">
                        Site Hakkında
                    </h2>
                </header>
                <div class="card-body">
                    <div class="content">
                        <ul>
                            <li>Sunucu<p> <span><b>localhost</b></span></p>
                            </li>
                            <li>Ürün Sayısı<p> <span><b>0</b> Aktif</span> -
                                    <span><b>0</b> Pasif</span>
                                </p>
                            </li>
                            <li>Kategori Sayısı<p> <span><b>0</b> Aktif</span> -
                                    <span><b>0</b>
                                        Pasif</span>
                                </p>
                            </li>
                            <li>Marka Sayısı<p> <span><b>0</b> Aktif</span> -
                                    <span><b>0</b> Pasif</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
@endsection
@section('js')
<script src="{{ asset('admin/vendor/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('admin/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-appear/jquery.appear.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('admin/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('admin/vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('admin/vendor/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('admin/vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('admin/vendor/raphael/raphael.js') }}"></script>
<script src="{{ asset('admin/vendor/morris/morris.js') }}"></script>
<script src="{{ asset('admin/vendor/gauge/gauge.js') }}"></script>
<script src="{{ asset('admin/vendor/gauge/gauge.js') }}"></script>
<script src="{{ asset('admin/vendor/liquid-meter/liquid.meter.js') }}"></script>
@endsection
@section('extra-js')
<script src="{{ asset('admin/js/examples/examples.dashboard.js') }}"></script>
@endsection
