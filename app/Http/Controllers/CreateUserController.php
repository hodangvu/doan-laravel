<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function userCreate(Request $request){

        dd($request);
        Job::create([ 
        'nameJob' => $request->nameJob,
        'fullname' => $request->fullname,
        'level' => $request->level,
        'age' => $request->age,
        'quanlity' => $request->quanlity
    ]);
        
        dd("Tao thanh cong");
        return redirect('/stocks')->with('success', 'Stock saved.');
    }
}