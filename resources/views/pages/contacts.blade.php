@extends('layouts.main')

@section('title', __('site.contacts'))
@section('content')
    <div class="page"><!-- page content -->
        <div class="container">
            <h1>{{__('site.contacts')}}</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">{{__('site.main')}}</a></li>
                    <li><span>{{__('site.contacts')}}</span></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <img src="/assets/images/img-13.jpg">
        </div>
        <div class="container contacts">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contacts__col">
                        <div class="icon"><img src="/assets/images/placeholder.svg"></div>
                        <p>
                            Республика Казахстан,<br>г. Алматы ул. Кожамкулова 139а</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contacts__col">
                        <div class="icon"><img src="/assets/images/call.svg"></div>
                        <div class="contacts__col__phone">
                            <a href="#" class="arrow"></a>
                            <ul>
                                <li><a href="tel:+77087017171">+7 708 701 71 71</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contacts__col">
                        <div class="icon"><img src="/assets/images/email.svg" alt=""></div>
                        <a href="mailto:art.kazakh@mail.ru">art.kazakh@mail.ru</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">

                <iframe
                    src="https://yandex.kz/map-widget/v1/?ll=76.920654%2C43.256582&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg2NzI5NzU1MBJK0prQsNC30LDSm9GB0YLQsNC9LCDQkNC70LzQsNGC0YssINKa0L7QttCw0LzSm9Kx0LvQvtCyINC606nRiNC10YHRliwgMTQz0JAiCg3X1JlCFZYHLUI%2C&z=16.22"
                    frameborder="1" allowfullscreen="true"  width="100%" height="100%" style="display: block;">
                </iframe>
        </div>
    </div>
@endsection
