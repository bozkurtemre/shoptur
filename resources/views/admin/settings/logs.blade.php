@extends('admin.layouts.master')
@section('title', 'Sistem Log')
@section('body-class', 'has-toolbar')
@section('content')
<div class="inner-toolbar clearfix">
    <ul>
        <li>
            <span class="font-weight-normal text-4" style="color: white;">(Son 1 Ay)</span>
        </li>
        <li class="right">
            <ul class="nav nav-pills nav-pills-primary">
                <li class="nav-item">
                    <label>Tip:</label>
                </li>
                <li class="nav-item">
                    <button class="nav-link active" data-bs-target="#warning" data-bs-toggle="tab">Uyarılar</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-target="#errors" data-bs-toggle="tab">Hatalar</button>
                </li>
            </ul>
        </li>
    </ul>
</div>

<section class="card">
    <div class="card-body tab-content">
        <div id="warning" class="tab-pane active">
            <table class="table table-striped table-no-more table-bordered mb-0">
                <thead>
                    <tr>
                        <th style="width: 10%"><span class="font-weight-normal text-4">Tip</span></th>
                        <th style="width: 15%"><span class="font-weight-normal text-4">Tarih</span></th>
                        <th><span class="font-weight-normal text-4">Mesaj</span></th>
                    </tr>
                </thead>
                <tbody class="log-viewer">
                    @foreach ($custom_logs as $log)
                    <tr>
                        <td class="pt-3 pb-3">
                            <i class="fas fa-info fa-fw text-info text-5 va-middle"></i>
                            <span class="va-middle">{{ $log->level_name }}</span>
                        </td>
                        <td class="pt-3 pb-3">
                            {{ $log->created_at }}
                        </td>
                        <td class="pt-3 pb-3">
                            {{ $log->message }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="errors" class="tab-pane">
            <table class="table table-striped table-no-more table-bordered mb-0">
                <thead>
                    <tr>
                        <th style="width: 10%"><span class="font-weight-normal text-4">Tip</span></th>
                        <th style="width: 15%"><span class="font-weight-normal text-4">Tarih</span></th>
                        <th><span class="font-weight-normal text-4">Mesaj</span></th>
                    </tr>
                </thead>
                <tbody class="log-viewer">
                    @foreach ($laravel_logs->where('level', 'error') as $log)
                    <tr>
                        <td class="pt-3 pb-3">
                            <i class="fas fa-times-circle fa-fw text-danger text-5 va-middle"></i>
                            <span class="va-middle">{{ $log->level }}</span>
                        </td>
                        <td class="pt-3 pb-3">
                            {{ $log->date }}
                        </td>
                        <td class="pt-3 pb-3">
                            {{ $log->context->message }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
