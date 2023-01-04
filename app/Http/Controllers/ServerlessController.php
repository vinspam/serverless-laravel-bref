<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerlessController extends Controller
{
    public function try()
    {
        return [
            'key' => "hello"
        ];
    }
}
