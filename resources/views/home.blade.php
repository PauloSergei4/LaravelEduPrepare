@extends('layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
    <section class="comonSection aboutSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sectionTitle">Про мене</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="icon_box_01">
                                <i class="icon icon-User"></i>
                                <h3>Мене звуть</h3>
                                <p>{{$title}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon_box_01">
                                <i class="icon icon-Calculator"></i>
                                <h3>Мій вік </h3>
                                <p>{{\Carbon\Carbon::now()->diffInYears('1985-11-28')}} років</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon_box_01">
                                <i class="icon icon-Mail"></i>
                                <h3>Email Адреса</h3>
                                <p>paulosergei4@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon_box_01">
                                <i class="icon icon-Phone"></i>
                                <h3>Phone Number</h3>
{{--                                <p>+3809934064**</p>--}}
                                <span class="phone_number">+380993406428<span class="phone_number_active"> Показать</span></span>
                                <script>
                                    [].forEach.call(document.querySelectorAll('.phone_number'),function(node){
                                        const item=node.firstChild;
                                        item.__hiddenPart=item.textContent.substr(-4);
                                        item.textContent=item.textContent.replace(item.__hiddenPart,'xxxx');

                                        node.querySelector('.phone_number_active').addEventListener('click',function(){
                                            item.textContent=item.textContent.replace('xxxx',item.__hiddenPart);

                                            this.style.display='none';
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon_box_01">
                                <i class="icon icon-Pointer"></i>
                                <h3>Адреса</h3>
                                <p><a href="https://www.google.com/maps/place/Shostkynskyy+Chemical+Technology+College.+Ivan+Kozhedub/@51.8619034,33.4714062,17.5z/data=!4m12!1m6!3m5!1s0x412b82f052306aab:0xbc3a7adf3c605a60!2sShostkynskyy+Chemical+Technology+College.+Ivan+Kozhedub!8m2!3d51.8618656!4d33.4729475!3m4!1s0x412b82f052306aab:0xbc3a7adf3c605a60!8m2!3d51.8618656!4d33.4729475" target="_blank">Глянути на мапі.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-lg-12">
                    <h2 class="sectionTitle mb22">Коротка біографія</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="abContent">
                        <p>
                           Викладач зі стажем, веб-розробник, працюю в коледжы викладачем електротехнічних дисциплін та ІТ технологій.
                        </p>
                        <p>
                            Маю свою веб-студію, яка займається веб-проеткми та мобільними додатками
                            <a href="https://web.centr.today/" target="_blank" class="fw_500">переглянути сайт</a> веб-студії.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abContent">
                        <p class="mb27">
                            Займаюсь розробкой сайтів для себе та під замовлення, навчаю цього молодь надаю перший старт для кар'єри веб-розробника.
                        </p>
{{--                        <img class="signImg" src="assets/images/home_01/3.png" alt=""/>--}}
                    </div>
                </div>
            </div>
            <div class="row mt52">
                <div class="col-lg-12">
                    <h2 class="sectionTitle">Що я роблю?</h2>
                </div>
            </div>
            <div class="row itemMb30">
                <div class="col-lg-4">
                    <div class="icon_box_02">
                        <div class="i_div">
                            <i class="icon icon-Settings"></i>
                        </div>
                        <h3><a href="javascript:void(0);">Веб розробка</a></h3>
                        <h5>PHP, Laravel, Joomla, OpenCart</h5>
                        <p>
                            Використовую сучасні технології і системи для повної розробки сайту.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box_02">
                        <div class="i_div">
                            <i class="icon icon-Pen"></i>
                        </div>
                        <h3><a href="javascript:void(0);">Викладання</a></h3>
                        <h5>комп'ютерно-інтегровані технології</h5>
                        <p>
                           Викладаю в коледжі сучасні комп'ютерно-інтегровані технології.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box_02">
                        <div class="i_div">
                            <i class="icon icon-Layers"></i>
                        </div>
                        <h3><a href="javascript:void(0);">Впровадження проектів</a></h3>
                        <h5>участь у проектах</h5>
                        <p>
                            Впроваджую декілька проетів в місті та області.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box_02">
                        <div class="i_div">
                            <i class="icon icon-Phone"></i>
                        </div>
                        <h3><a href="javascript:void(0);">Додатки</a></h3>
                        <h5>iOS, Android</h5>
                        <p>
                            Керю потужною командою розробників додатків для мобільних платформ.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box_02">
                        <div class="i_div">
                            <i class="icon icon-Share"></i>
                        </div>
                        <h3><a href="javascript:void(0);">Соціальна складова</a></h3>
                        <h5>соціальні проекти</h5>
                        <p>
                            Я - людина соціальна. Постійно підримую та беру участь у соціальних проектах міста.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box_02">
                        <div class="i_div">
                            <i class="icon icon-ChartUp"></i>
                        </div>
                        <h3><a href="javascript:void(0);">Нові відкриття</a></h3>
                        <h5>відкритий для нового</h5>
                        <p>
                            Завжди шукаю нові відкриття. Спілкуюся з молоддю генерую, проецюю та просуваю сучасні проекти.
                        </p>
                    </div>
                </div>
            </div>
{{--            <div class="row mt30">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h2 class="sectionTitle">What They Says?</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="testimonialSlider owl-carousel">--}}
{{--                        <div class="singleTestimonial">--}}
{{--                            <div class="testiImg">--}}
{{--                                <img src="assets/images/author/1.jpg" alt="">--}}
{{--                                <span></span>--}}
{{--                            </div>--}}
{{--                            <div class="testicon">--}}
{{--                                <p>--}}
{{--                                    They'll have to make the best of things its an uphill climb. Said Californ'y is the place you ought--}}
{{--                                    to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars.--}}
{{--                                    Maybe you and me were never meant to be.--}}
{{--                                </p>--}}
{{--                                <div class="tesAuthor"><h5>Edward Johnson,</h5> <h6>themewar.com</h6></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="singleTestimonial">--}}
{{--                            <div class="testiImg">--}}
{{--                                <img src="assets/images/author/2.jpg" alt="">--}}
{{--                                <span></span>--}}
{{--                            </div>--}}
{{--                            <div class="testicon">--}}
{{--                                <p>--}}
{{--                                    They'll have to make the best of things its an uphill climb. Said Californ'y is the place you ought--}}
{{--                                    to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars.--}}
{{--                                    Maybe you and me were never meant to be.--}}
{{--                                </p>--}}
{{--                                <div class="tesAuthor"><h5>Mosharof Khondoker,</h5> <h6>themewar.com</h6></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="singleTestimonial">--}}
{{--                            <div class="testiImg">--}}
{{--                                <img src="assets/images/author/3.jpg" alt="">--}}
{{--                                <span></span>--}}
{{--                            </div>--}}
{{--                            <div class="testicon">--}}
{{--                                <p>--}}
{{--                                    They'll have to make the best of things its an uphill climb. Said Californ'y is the place you ought--}}
{{--                                    to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars.--}}
{{--                                    Maybe you and me were never meant to be.--}}
{{--                                </p>--}}
{{--                                <div class="tesAuthor"><h5>Sara Ferdoush,</h5> <h6>themewar.com</h6></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row mt60">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h2 class="sectionTitle">Fair Price</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="pricingTable text-center">--}}
{{--                        <i class="icon icon-Car"></i>--}}
{{--                        <h5>Starter Package</h5>--}}
{{--                        <p>--}}
{{--                            Suitable for small business or Organizations.--}}
{{--                        </p>--}}
{{--                        <h2>$27.00</h2>--}}
{{--                        <h6>per project</h6>--}}
{{--                        <a href="contact.html" class="btt_link"><i class="icon icon-OpenedLock"></i><span>Let's Start</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="pricingTable text-center">--}}
{{--                        <i class="icon icon-Truck"></i>--}}
{{--                        <h5>Business Package</h5>--}}
{{--                        <p>--}}
{{--                            Suitable for medium business or Organizations.--}}
{{--                        </p>--}}
{{--                        <h2>$47.00</h2>--}}
{{--                        <h6>per project</h6>--}}
{{--                        <a href="contact.html" class="btt_link"><i class="icon icon-OpenedLock"></i><span>Let's Start</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="pricingTable text-center">--}}
{{--                        <i class="icon icon-BigTruck"></i>--}}
{{--                        <h5>Pro Package</h5>--}}
{{--                        <p>--}}
{{--                            Suitable for any business or Organizations.--}}
{{--                        </p>--}}
{{--                        <h2>$97.00</h2>--}}
{{--                        <h6>per project</h6>--}}
{{--                        <a href="contact.html" class="btt_link"><i class="icon icon-OpenedLock"></i><span>Let's Start</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row mt60">
                <div class="col-lg-5">
                    <h2 class="sectionTitle">Захоплення</h2>
                    <div class="singleInt">
                        <i class="interest-badminton"></i>
                        <h3>автивний відпочинок</h3>
                    </div>
                    <div class="singleInt">
                        <i class="interest-knight"></i>
                        <h3>Мандрівки</h3>
                    </div>
                    <div class="singleInt">
                        <i class="interest-basketball"></i>
                        <h3>Рухливі ігри</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h2 class="sectionTitle">Мови</h2>
                    <div class="languageDiv">
                        <div class="ldInner profLevel7">
                            <h5>English</h5>
                            <span></span><span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span><span></span>
                            <i>6/10</i>
                        </div>
                        <div class="ldInner profLevel6">
                            <h5>Українська</h5>
                            <span></span><span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span><span></span>
                            <i>9/10</i>
                        </div>
                        <div class="ldInner profLevel4">
                            <h5>Російська</h5>
                            <span></span><span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span><span></span>
                            <i>9/10</i>
                        </div>
                        <div class="ldInner profLevel9">
                            <h5>РНР</h5>
                            <span></span><span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span><span></span>
                            <i>8/10</i>
                        </div>
                        <div class="ldInner profLevel7">
                            <h5>С++</h5>
                            <span></span><span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span><span></span>
                            <i>7/10</i>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row mt30">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="clientSlider owl-carousel">--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/8.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/9.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/10.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/11.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/12.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/13.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/14.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="sliderItem">--}}
{{--                            <a href="javascript:void(0);">--}}
{{--                                <img src="assets/images/client/15.png" alt="Client"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row mt60">
                <div class="col-lg-12">
                    <h2 class="sectionTitle">Цікавинки</h2>
                </div>
            </div>
            <div class="row mb30">
                <div class="col-lg-4">
                    <div class="icon_box_03 text-center hasCounter" data-count="10">
                        <div class="icon_div">
                            <i><span class="counter">10</span>+</i>
                        </div>
                        <h5>Років досвіду</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box_03 text-center hasCounter" data-count="120">
                        <div class="icon_div">
                            <i><span class="counter">120</span>+</i>
                        </div>
                        <h5>Успішних проектів</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box_03 text-center hasCounter" data-count="2">
                        <div class="icon_div">
                            <i><span class="counter">2</span>K+</i>
                        </div>
                        <h5>Щасливих студентів</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

