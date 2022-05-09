@extends('layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
    <section class="comonSection blogSecion">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sectionTitle">Останні записи блогу</h2>
                </div>
            </div>

            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6">
                    <div class="blogItem text-left">
                        <div class="biThumb">
                            <img src="{{asset("storage/".$post->image)}}" intrinsicsize="350px x 235px" alt=""/>
                            <div class="biMeta">
                                <a href="blog.html"></a>Rubric <a href="blog.html">{{$post->getPostDate()}}{{--\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d.m.Y')--}}</a>
                            </div>
                        </div>
                        <div class="biDetails">
                            <h3><a href="single_blog.html">{{$post->title}}</a></h3>
                            <p>
                                {{Str::limit($post->content, 80)}}                            </p>
                            <a href="single_blog.html" class="btt_link"><span>Читати далі...</span></a>
                            <span class="blogCount">{{$post->id}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row mt30 mb30">
                <div class="col-lg-12">
                    <div class="btt_pagination">
                        <a href="blog.html"><i class="icon icon-Arrow rotateHorizonaly"></i></a>
                        <span class="current">01</span>
                        <a href="blog.html">02</a>
                        <a href="blog.html">03</a>
                        <span class="blanks">...</span>
                        <a href="blog.html">10</a>
                        <a href="blog.html"><i class="icon icon-Arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
