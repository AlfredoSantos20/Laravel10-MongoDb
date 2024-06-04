<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AccountsController extends Controller
{
    public function test(){
        $test = DB::connection('mongodb')->collection('accounts')->get();
        dd($test);
        return view('test');
    }
}
