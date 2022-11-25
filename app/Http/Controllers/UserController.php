<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $queryJob = DB::table('infotion')->get();

        return view('infotion.list', [
            'jobs' => $queryJob,
            
        ]);
    }
}
