<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        Log::channel('local_db')->info("Anasayfa görüntülendi.");
        return view('admin.dashboard');
    }
}
