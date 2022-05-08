@extends('layouts.layout')
@section('title')
    {{$title}} - @parent
@endsection
@section('content')
    <div class="pageCointainer">
        <section class="comonSection resumeSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="sectionTitle">Освіта</h2>
                        <div class="kr-accordion" id="edication_accordion">
                            <div class="card">
                                <div class="card-header" id="ea_01">
                                    <h2 class="mb-0">
                                        <a class="" href="#" data-toggle="collapse" data-target="#ea_col_01" aria-expanded="true" aria-controls="ea_col_01">
                                            <i class="icon icon-Medal"></i>
                                            <span>СумДУ</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ea_col_01" class="collapse show" aria-labelledby="ea_01" data-parent="#edication_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>Рік: 2010</span><span>Диплом: червоний</span></div>
                                        Спеціальність: системи управління та автоматизація, кваліфікація: інженер з комп'ютерних систем.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ea_02">
                                    <h2 class="mb-0">
                                        <a class="collapsed" href="#" data-toggle="collapse" data-target="#ea_col_02" aria-expanded="false" aria-controls="ea_col_02">
                                            <i class="icon icon-Medal"></i>
                                            <span>ХТК ШІ СумДУ</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ea_col_02" class="collapse" aria-labelledby="ea_02" data-parent="#edication_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>Рік: 2005</span><span>Диплом: червоний</span></div>
                                        Спеціальність: монтаж та експлуатація енергетичних систем та цивільних споруд, кваліфікація: технік-електрик.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ea_03">
                                    <h2 class="mb-0">
                                        <a class="collapsed" href="#" data-toggle="collapse" data-target="#ea_col_03" aria-expanded="false" aria-controls="ea_col_03">
                                            <i class="icon icon-Medal"></i>
                                            <span>Комп'ютерні знання та інженерія</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ea_col_03" class="collapse" aria-labelledby="ea_01" data-parent="#edication_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>Рік: 2003</span><span>Рівень: високий</span></div>
                                        Вивчаю комп'ютери та системи з моменту купівлі першого ПК, щоразу самовдосконалююсь.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
{{--                                <div class="card-header" id="ea_04">--}}
{{--                                    <h2 class="mb-0">--}}
{{--                                        <a class="collapsed" href="#" data-toggle="collapse" data-target="#ea_col_04" aria-expanded="false" aria-controls="ea_col_04">--}}
{{--                                            <i class="icon icon-Medal"></i>--}}
{{--                                            <span>Programming Course </span>--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                </div>--}}
{{--                                <div id="ea_col_04" class="collapse" aria-labelledby="ea_01" data-parent="#edication_accordion">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ac_meta"><span>Passing Year: 2015</span><span>Grade: 3.79</span></div>--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="sectionTitle">Досвід</h2>
                        <div class="kr-accordion" id="exps_accordion">
                            <div class="card">
                                <div class="card-header" id="ex_01">
                                    <h2 class="mb-0">
                                        <a class="" href="#" data-toggle="collapse" data-target="#ex_col_01" aria-expanded="true" aria-controls="ex_col_01">
                                            <i class="icon icon-Cup"></i>
                                            <span>Викладання.</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ex_col_01" class="collapse show" aria-labelledby="ex_01" data-parent="#exps_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>вер 2010 - теп час</span><span>викладач 1 категорії</span></div>
                                        Викладаю в коледжі, постійно вдосконалюю свої навики викладання.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ex_02">
                                    <h2 class="mb-0">
                                        <a class="collapsed" href="#" data-toggle="collapse" data-target="#ex_col_02" aria-expanded="false" aria-controls="ex_col_02">
                                            <i class="icon icon-Cup"></i>
                                            <span>РНР</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ex_col_02" class="collapse" aria-labelledby="ex_02" data-parent="#exps_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>Бер 2016 - теп. час</span><span>jun. Developer</span></div>
                                        Використовую мову PHP для написання веб-додатків.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ex_03">
                                    <h2 class="mb-0">
                                        <a class="collapsed" href="#" data-toggle="collapse" data-target="#ex_col_03" aria-expanded="false" aria-controls="ex_col_03">
                                            <i class="icon icon-Cup"></i>
                                            <span>Laravel</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ex_col_03" class="collapse" aria-labelledby="ex_01" data-parent="#exps_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>Сер 2017 - теп. час</span><span>jun. Developer</span></div>
                                        Використовую фреймворк Laravel для розробки сучасних веб-додатків.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ex_04">
                                    <h2 class="mb-0">
                                        <a class="collapsed" href="#" data-toggle="collapse" data-target="#ex_col_04" aria-expanded="false" aria-controls="ex_col_04">
                                            <i class="icon icon-Cup"></i>
                                            <span>Joomla, OpenCart.</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ex_col_04" class="collapse" aria-labelledby="ex_04" data-parent="#exps_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>Лист 2008 - теп. час</span><span>mid. Developer</span></div>
                                        Використовую CMS платформи для швидкого розгортання та надыйної підтримки веб-ресурсів.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
