<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
class PemerintahController extends Controller
{
    public function user() {
        return response()
            // ->view('Hello World', 200)
            ->json([
                'name' => 'ridwan',
                'lalilu' => 'aiu'
            ])
            ->header('Content-Type','text/plain');
    }
}
