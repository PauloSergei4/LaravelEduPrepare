<header class="header clearfix">
    <a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i>Menu</a>
    <nav class="mainMenu">
        <ul class="clearfix">
            <li @if(Route::is('home'))class="active"@endif><a href="{{route('home')}}"><i class="icon icon-House"></i><span>Головна</span></a></li>
            <li @if(Route::is('resume'))class="active"@endif><a href="{{route('resume')}}"><i class="icon icon-User"></i><span>Резюме</span></a></li>
            <li @if(Route::is('portfolio'))class="active"@endif><a href="{{route('portfolio')}}"><i class="icon icon-Bulb"></i><span>Портфоліо</span></a></li>
            <li @if(Route::is('blog'))class="active"@endif><a href="{{route('blog')}}"><i class="icon icon-ClipboardText"></i><span>Блог</span></a></li>
            <li @if(Route::is('contact'))class="active"@endif><a href="{{route('contact')}}"><i class="icon icon-Imbox"></i><span>Контакти</span></a></li>
        </ul>
    </nav>
    <a href="#" class="sidebarToggler"><span><span></span><span></span><span></span></span></a>
</header>
