<footer><!-- footer -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 footer__about">
                <a href="/" class="footer--logo"><img src="/assets/images/footer--logo.png"></a>
                <p>{!! __('site.about_us1') .'<br>'. __('site.about_us2') !!}</p>
            </div>
            <div class="col-lg-2 col-md-3 col-lg-offset-1 footer__nav">
                <h6>{{__('site.categories')}}</h6>
                <ul>
                    @foreach($categories as $category)
                        <li class="{{ request()->url() == route('products',  ['alias' => $category->id]) ? 'active':'' }}"><a href="{{ route('products', ['alias' => $category->id]) }}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 footer__nav">
                <h6>{{__('site.nav')}}</h6>
                <ul>
                    <li class="{{ request()->routeIs('contacts') ? 'active':'' }}"><a href="{{ route('contacts') }}">{{__('site.contacts')}}</a></li>
                    <li class="{{ request()->routeIs('about') ? 'active':'' }}"><a href="{{ route('about') }}">{{__('site.about')}}</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 footer__contacts">
                <h6>{{__('site.contacts')}}</h6>
                <ul>
                    <li>
                        Республика Казахстан,<br>г. Алматы ул. Кожамкулова 139а</li>

                    <li><a href="tel:+77087017171">+7 708 701 71 71</a></li>

                    <li>Email: <a href="mailto:art.kazakh@mail.ru">art.kazakh@mail.ru</a></li>
                </ul>
                <ul class="socials">
                    <li><a href="https://www.instagram.com/art__kazakh" target="_blank"><img src="/assets/images/instagramW.svg"></a></li>
                    <li class="vk"><a href="https://vk.com/id508250357" target="_blank"><img src="/assets/images/vkW.svg"></a></li>

                </ul>            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <p>Copyright © {{ date('Y') }} art-kaz.kz. All Rights Reserved. {{__('site.buy_paintings')}}</p>
            <!-- <a href="https://artmedia.kz" target="_blank" class="artmedia"><img src="/assets/images/artmedia.png"></a> -->
        </div>
    </div>
</footer>
