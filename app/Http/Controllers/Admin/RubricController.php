<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RubricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Рубріки';
       // dd($title);
        $rubrics = Rubric::orderBy('id', 'desc')->get();
        $maxpost = DB::table('posts')->max('id');
        return view('admin.rubrics.index', compact( 'title', 'rubrics','maxpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Створити рубріку';
        $maxpost = DB::table('posts')->max('id');
        return view('admin.rubrics.create', compact( 'title','maxpost'));
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
            'name' => 'required|min:2|max:15',
        ];
        $messages = [
            'name.required' => 'Заповніть поле назви',
        ];

        $validator = Validator::make($request->all(),$rules, $messages)->validate();
        Rubric::create($request->all());
        $request->session()->flash('success', 'Дані збережено');
        return redirect()->route('admin.rubrics.index', compact('request'));
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
        $title = 'Змінити рубрику';
        $rubric = Rubric::find($id);
        $maxpost = DB::table('posts')->max('id');
        return view('admin.rubrics.edit', compact('title', 'id', 'rubric', 'maxpost'));
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
            'name' => 'required|min:2|max:15',
        ];
        $messages = [
            'name.required' => 'Заповніть поле назви',
        ];
        $validator = Validator::make($request->all(),$rules, $messages)->validate();
        $rubric = Rubric::find($id);
        $rubric->update($request->all());
        $request->session()->flash('success', 'Дані збережено');
        return redirect()->route('admin.rubrics.index', compact('request'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rubric::destroy($id);
        return redirect()->route('admin.rubrics.index')->with('success','Успішно видалено');
    }
}
