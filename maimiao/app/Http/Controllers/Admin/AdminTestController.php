<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTestController extends Controller {
    public function admin(Request $request)
    {
        return 'This is admin!';
    }
}
