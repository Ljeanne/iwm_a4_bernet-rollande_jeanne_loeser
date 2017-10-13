<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index()
    {
        $value = Cache::get('key');

        $value = Cache::remember('users', $minutes, function () {
            return DB::table('users')->get();
        });
    }
}
