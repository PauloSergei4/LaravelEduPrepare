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

    public function posts()
    {
        $title = 'Пости  блогу';

            $posts = Post::orderBy('id', 'desc')->get();

        $maxpost = DB::table('posts')->max('id');
        return view('admin.posts', compact( 'title','posts', 'maxpost'));
    }

    public function profile()
    {
        $title = 'Профіль';

        $maxpost = DB::table('posts')->max('id');
        return view('admin.profile', compact( 'title', 'maxpost'));
    }

    public function rubric()
    {
        $title = 'Рубріки';

        $maxpost = DB::table('posts')->max('id');
        return view('admin.profile', compact( 'title', 'maxpost'));
    }

    public function create()
    {

        $title = 'Створити новину';
        $rubrics =  Rubric::pluck('name', 'id')->all();
        $maxpost = DB::table('posts')->max('id');
        return view('admin.create', compact('title','rubrics', 'maxpost'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * m
     */

    public function store(Request $request)
    {
//        $this->validate($request, [
//            'title' => 'required|min:5|max:100',
//            'content'=>'required',
//            'rubric_id'=>'integer'
//        ]);

        $rules = [
            'title' => 'required|min:5|max:100',
            'content'=>'required',
            'rubric_id'=>'integer'
        ];
        $messages = [
            'title.required' => 'Заповніть поле назви',
            'title.min'=>'Мінімум 5 символів в назві',
            'rubric_id.integer'=>'Оберіть рубрику',
            'content.required' => 'Ви не написали статтю',
        ];

        $validator = Validator::make($request->all(),$rules, $messages)->validate();
        Post::create($request->all());
        $request->session()->flash('success', 'Дані збережено');
        return redirect()->route('admin.posts', compact('request'));
    }
}

