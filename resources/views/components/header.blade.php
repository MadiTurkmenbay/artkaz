<header>
    <div class="container">
        <a href="{{ route('home') }}" class="logo"><img src="/assets/images/logo.png"></a>
        <div class="langs open" style="">
            <ul>
                <li @if(app()->isLocale('en')) class="active"@endif><a href="{{route('locale', 'en')}}">Eng</a></li>
                <li @if(app()->isLocale('kk')) class="active"@endif><a href="{{route('locale', 'kk')}}">Каз</a></li>
                <li @if(app()->isLocale('ru')) class="active"@endif><a href="{{route('locale', 'ru')}}">Рус</a></li>
            </ul>
        </div>
        <ul class="socials">
            <li><a href="https://www.instagram.com/art-kaz.kz/" target="_blank"><img src="/assets/images/instagram.svg"></a></li>
            <li class="vk"><a href="https://vk.com/id508250357" target="_blank"><img src="/assets/images/vk.svg"></a></li>

        </ul>

{{--        <form class="search" method="POST" action="/search/"><!-- header search -->--}}
{{--            <input type="search" placeholder="Введите слово..." required="required" name="what">--}}
{{--            <a href="#" class="close"></a>--}}
{{--        </form><!-- header search -->--}}
{{--        <a href="#" class="search--btn"></a>--}}
        <a href="#" class="nav--btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <div class="container-fluid">
        <div class="container">
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('home') }}">{{__('site.main')}}</a></li>
                    <li><a href="{{ route('about') }}">{{__('site.about')}}</a></li>
                    <li class="submenu"><a href="{{ route('catalog') }}">+{{__('site.categories')}}</a>
                        <ul style="">
                            @foreach($categories as $category)

                                <li><a href="/catalog/{{$category->id}}/">{{$category->title}}</a></li>
                            @endforeach
{{--                            <li><a href="/catalog/439-dekorativno_prikladnoje_iskusstvo/">Декоративно прикладное--}}
{{--                                    искусство</a></li>--}}
{{--                            <li><a href="/catalog/440-skulptura/">Скульптура</a></li>--}}
{{--                            <li><a href="/catalog/441-raznoje/">Разное</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{ route('contacts') }}">{{__('site.contacts')}}</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
