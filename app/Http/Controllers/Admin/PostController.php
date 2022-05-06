<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Пости  блогу';

        $posts = Post::orderBy('id', 'desc')->get();

        $maxpost = DB::table('posts')->max('id');
        return view('admin.posts.posts', compact( 'title','posts', 'maxpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Створити новину';
        $rubrics =  Rubric::pluck('name', 'id')->all();
        $maxpost = DB::table('posts')->max('id');
        return view('admin.posts.create', compact('title','rubrics', 'maxpost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return redirect()->route('admin.posts.posts', compact('request'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Змінити пост';
        $post = Post::find($id);
        //$titlepost = $post->get('title');
        $rubrics =  Rubric::pluck('name', 'id')->all();
        $maxpost = DB::table('posts')->max('id');
        return view('admin.posts.edit', compact('title', 'id', 'post', 'rubrics', 'maxpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        $post = Post::find($id);
        $post->update($request->all());
        $request->session()->flash('success', 'Дані збережено');
        return redirect()->route('admin.posts.posts', compact('request'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
