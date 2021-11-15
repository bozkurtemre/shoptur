@extends('admin.layouts.master')
@section('title', 'Anasayfa')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/datatables/media/css/dataTables.bootstrap5.css') }}" />
@endsection
@section('content')
<section class="card">
    <header class="card-header">
        <div class="card-actions">
            <a href="javascript:void(0)" class="card-action card-action-toggle" data-card-toggle></a>
        </div>
        <h2 class="card-title">Kategoriler</h2>
    </header>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <button class="btn btn-primary">Ekle <i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0" id="datatable-categories">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ad</th>
                    <th>Üst Kategori</th>
                    <th>Sıra</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr data-item-id="{{ $category->id }}">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ isset($category->parent->name) ? $category->parent->name : "Yok" }}</td>
                    <td>{{ $category->seq }}</td>
                    <td><i class='bx bxs-circle' style="color: {{ $category->status == 1 ? " green;" : "red;" }}"></i>
                        {{ $category->status == 1 ? "Aktif" : "Pasif" }}</td>
                    <td>
                        <a class="btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <a href="javascript::void(0)" class="btn-sm btn-danger remove-row"><i
                                class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

<!-- Delete Confirm Modal -->
<div id="deleteDialog" class="modal-block modal-block-primary mfp-hide">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Emin Misiniz?</h2>
        </header>
        <div class="card-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <p class="mb-0">Bu kategoriyi silmek istediğinizden emin misiniz?</p>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-end">
                    <button id="deleteConfirm" class="btn btn-primary">Evet</button></a>
                    <button id="deleteCancel" class="btn btn-default modal-dismiss">Vazgeç</button>
                </div>
            </div>
        </footer>
    </section>
</div>

@endsection
@section('js')
<script src="{{ asset('admin/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
@endsection
@section('extra-js')
<script src="{{ asset('admin/js/pages/categories.js') }}"></script>
@endsection
