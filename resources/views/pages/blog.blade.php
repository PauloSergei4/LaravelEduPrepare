@extends('layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('links')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                    <a href="blog.html"></a>Rubric <a
                                        href="blog.html">{{$post->getPostDate()}}{{--\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d.m.Y')--}}</a>
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
                        {{$posts->links('vendor.pagination.custom')}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>--}}
@endsection

