<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function blog()
    {
        $title = 'Блог';

//        if(Cache::has('posts')){
//            $posts = Cache::get('posts');
//        }
//        else {
            $posts = Post::orderBy('id', 'desc')->paginate(4);
            Cache::put('posts',$posts, 3600);
       // }
        //$posts = Post::orderBy('id', 'desc')->get();
        return view('pages.blog', compact('title', 'posts'));
    }

    public function contact(Request $request)
    {
        $title = 'Контакти';



        if ($request->method()=='POST'){

            $rules = [
                'full_name' => 'required|min:5|max:100',
                'email'=>'required|email',
                'phone'=>'required|numeric',
                'subject'=>'required',
                'message'=>'required',
            ];
            $messages = [
                'full_name.required' => 'Заповніть ваші ПІБ',
                'email.required'=>'Заповніть вашу електронну скриньку',
                'phone.numeric'=>'Некоректний запис телефону',
                'phone.required'=>'Заповніть телефон',
                'subject.required' => 'Ви не написали тему звернення',
                'message.required' => 'Ви не написали звернення',
            ];

            $validator = Validator::make($request->all(),$rules, $messages)->validate();

            $body = "<p><b> Ім'я:</b>{$request->input('full_name')}</p>";
            $body .= "<p><b> E-mail:</b>{$request->input('email')}</p>";
            $body .= "<p><b> Телефон:</b>{$request->input('phone')}</p>";
            $body .= "<p><b> Тема повідомлення:</b>{$request->input('subject')}</p>";
            $body .= "<p><b> Повідомлення:</b><br>".nl2br($request->input('message'))."</p>";
            Mail::to('ppshostka@gmail.com')->send(new ContactMail($body));
            $request->session()->flash('success', 'Повідомлення відправлено');
            return redirect('contact');
        }

        return view('pages.contact', compact('title'));
    }

    public function portfolio()
    {
        $title = 'Портфоліо';
        return view('pages.portfolio', compact('title'));
    }

    public function resume()
    {
        $title = 'Резюме';
        return view('pages.resume', compact('title'));
    }

}


