@extends('layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
    @include('admin.layouts.errors')    <div class="pageCointainer">
{{--        <section class="comonSection mapSection mb30">--}}
{{--            <div class="map" id="map"></div>--}}
{{--        </section>--}}
        <section class="comonSection contactSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">Контакт зі мною</h2>
                    </div>
                </div>
                <div class="row mb30">
                    <div class="col-lg-8">
                        <div class="contact_form">
                            <form method="post" action="{{route('contact')}}" id="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="required" name="full_name" placeholder="Повне ім'я *" value="{{old('full_name')}}"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="required" name="email" placeholder="Email *" value="{{old('email')}}"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="phone" placeholder="Телефон" value="{{old('phone')}}"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="required" name="subject" placeholder="Тема *" value="{{old('subject')}}"/>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" class="required" placeholder="Повідомлення *" value="{{old('message')}}"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btt_btn"><span><i class="icon icon-Mail"></i>Відправити повідомлення</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon_box_01">
                            <i class="icon icon-Mail"></i>
                            <h3>Email Address</h3>
                            <p>k.melissa@caroll.me</p>
                        </div>
                        <div class="icon_box_01">
                            <i class="icon icon-Phone"></i>
                            <h3>Phone Number</h3>
                            <p>1.800.987.6987</p>
                        </div>
                        <div class="icon_box_01 addrBox">
                            <i class="icon icon-Pointer"></i>
                            <h3>Address</h3>
                            <p>
                                189 Lodge Avenue,
                                Dagenham, RM8 2HQ,
                                United Kingdom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

