<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiTestController extends Controller {
    public function api(Request $request)
    {
        return 'This is api';
    }
}
