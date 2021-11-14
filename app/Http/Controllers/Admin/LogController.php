<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Log as LogModel;

class LogController extends Controller
{
    public function index()
    {
        Log::channel('local_db')->info("Sistem Log görüntülendi.");
        return view('admin.settings.logs', ['logs' => LogModel::limit(15)->get()]);
    }
}
