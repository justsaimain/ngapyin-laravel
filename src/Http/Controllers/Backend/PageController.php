<?php

namespace Justsaimain\Ngapyin\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('admin_login::backend.dashboard');
    }
}
