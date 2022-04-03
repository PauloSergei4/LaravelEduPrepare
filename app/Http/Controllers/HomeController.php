<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    //
    public function index()
    {
//        for ($i = 1; $i <= 10; $i++) {
//            DB::insert("INSERT INTO posts (title, content, created_at, updated_at) VALUES (?,?,?,?)", ["Post $i","Content Post $i", NOW(), NOW()]);
//        }

//        $posts = DB::select("SELECT * FROM posts WHERE id>:id", ['id'=>4]);
//        return $posts;
//        dd($posts);

        $title = 'Пата Павло';
        //$date = date("Y-m-d");
        return view('home', compact('title'));
    }
}
