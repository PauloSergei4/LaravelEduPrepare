<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Основне';
        $maxpost = DB::table('posts')->max('id');
        return view('admin.index', compact('title', 'maxpost'));
    }



    public function profile()
    {
        $title = 'Профіль';

        $maxpost = DB::table('posts')->max('id');
        return view('admin.profile', compact( 'title', 'maxpost'));
    }




    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * m
     */


}


