@extends('admin.layouts.master')
@section('title', 'Anasayfa')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/datatables/media/css/dataTables.bootstrap5.css') }}" />
@endsection
@section('content')
<section class="body">
    <!-- start: page -->
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>
                    <h2 class="card-title">Kategoriler</h2>
                </header>
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th class="d-lg-none">Engine version</th>
                                <th class="d-lg-none">CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td class="center d-lg-none">4</td>
                                <td class="center d-lg-none">X</td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td class="center d-lg-none">5</td>
                                <td class="center d-lg-none">C</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
@endsection
@section('js')
<script src="{{ asset('admin/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
@endsection
@section('extra-js')
<script src="{{ asset('admin/js/examples/examples.datatables.default.js') }}"></script>
@endsection
