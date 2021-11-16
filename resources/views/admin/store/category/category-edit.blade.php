@extends('admin.layouts.master')
@section('title', 'Kategori Düzenle')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendor/summernote/summernote-bs4.css') }}" />
@endsection
@section('header-title', 'Kategori Düzenle')
@section('nav-alt-tab')
<li><span>Kategoriler</span></li>
<li><span>Kategori Düzenle</span></li>
@endsection
@section('content')
<section class="card">
    <form action="{{ route('admin.category.update', $category->id) }}" method="post">
        @csrf
        <header class="card-header">
            <div class="card-actions">
                <a href="javascript:void(0)" class="card-action card-action-toggle" data-card-toggle></a>
            </div>
            <h2 class="card-title">{{ $category->name }}</h2>
        </header>
        <div class="card-body">
            <!-- default / right -->
            <div class="row">
                <div class="col">
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active">
                                <a class="nav-link" data-bs-target="#general" href="#general" data-bs-toggle="tab"><i
                                        class="fas fa-home"></i> Genel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-target="#seo" href="#seo" data-bs-toggle="tab"><i
                                        class="fas fa-search"></i> SEO</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="general" class="tab-pane active">
                                <div class="form-group row pb-4">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="name">Kategori
                                        Adı</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $category->name }}" required>
                                    </div>
                                </div>
                                <div class="form-group row pb-4">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="description">Kategori
                                        Açıklaması</label>
                                    <div class="col-lg-6">
                                        <textarea name="description" id="description" class="summernote"
                                            data-plugin-summernote
                                            data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row pb-4">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="parent_id">Üst
                                        Kategori</label>
                                    <div class="col-lg-6">
                                        <select data-plugin-selectTwo class="form-control populate" name="parent_id"
                                            id="parent_id">
                                            <option value="" {{ $category->parent_id == null ? 'selected="selected"' :
                                                '' }}>Yok</option>
                                            @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ?
                                                'selected="selected"' : '' }}>{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row pb-4">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="seq">Sıra</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="seq" id="seq"
                                            value="{{ $category->seq }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="status">Durum</label>
                                    <div class="col-lg-6">
                                        <select data-plugin-selectTwo class="form-control populate" name="status"
                                            id="status" data-minimum-results-for-search="Infinity" required>
                                            <option value="0" {{ $category->status == 0 ? 'selected="selected"' : ''
                                                }}>Pasif</option>
                                            <option value="1" {{ $category->status == 1 ? 'selected="selected"' : ''
                                                }}>Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="seo" class="tab-pane">
                                <div class="form-group row pb-4">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="meta_title">Meta
                                        Title</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="meta_title" id="meta_title"
                                            value="{{ $category->meta_title }}">
                                    </div>
                                </div>
                                <div class="form-group row pb-4">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="meta_desc">Meta
                                        Description</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="meta_desc" id="meta_desc"
                                            value="{{ $category->meta_desc }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-end pt-2" for="meta_keywords">Meta
                                        Keywords</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="meta_keywords" id="meta_keywords"
                                            value="{{ $category->meta_keywords }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <div class="row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                    <button type="reset" class="btn btn-default">Sıfırla</button>
                </div>
            </div>
        </footer>
    </form>
</section>
@endsection
@section('js')
<script src="{{ asset('admin/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('admin/vendor/summernote/summernote-bs4.js') }}"></script>
@endsection
@section('extra-js')
@endsection
