<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Log as LogModel;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Jackiedo\LogReader\Facades\LogReader;

class LogController extends Controller
{
    public function index()
    {
        return view('admin.settings.logs', ['laravel_logs' => LogReader::paginate(15), 'custom_logs' => LogModel::paginate(15)]);
    }
}
