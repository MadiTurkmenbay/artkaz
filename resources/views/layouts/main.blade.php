<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/Bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ui.css')}}">
    <script type="text/javascript">var _LANG_ = "ru", ajaxFile = "/cms/../ajax.php";</script>
    <script type="text/javascript">var _NOWORD_ = "Введите слово для поиска", _TOOLONG_ = "Слово для поиска должно быть длиннее 3-х символов", _SEARCHWORD_ = "Поиск по сайту";</script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-1.1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.placeholder.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ckeditor.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}" ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-43318425-13');
    </script>
    @yield('custom_css')
    <title>@yield('title')</title>
</head>
<body>
@include('components.header')
@yield('content')

<div id="modal--call" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <h4>Заказать звонок</h4>
                <form method="POST" class="callbackForm" modal="true" modal-id="modal--successfully">
                    <input type="text" placeholder="Имя" required="required" name="name">
                    <input type="text" name="tel" placeholder="+7 (___) ___-__-__" required="required" im-insert="true">
                    <div class="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfr9n8UAAAAAJh9Dh4asNSfkXcBlcfJhLKs1oD-&amp;co=aHR0cDovL3d3dy5hYmFydC5rejo4MA..&amp;hl=ru&amp;v=SglpK98hSCn2CroR0bKRSJl5&amp;size=normal&amp;cb=c3kistlx1r0y" width="304" height="78" role="presentation" name="a-u8whlmshnhfg" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                    <button type="submit" class="btn">Отправить</button>
                    <div class="result">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="modal--successfully" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <h4>Ваше заявка успешно отправлено!</h4>
            </div>
        </div>
    </div>
</div>
<a href="https://api.whatsapp.com/send?phone=номер_телефона" target="_blank" class="whatsapp_link">
    <img src="{{asset('assets/images/whatsapp.png')}}" alt="WhatsApp">
</a>
@include('components.footer')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="{{asset('assets/js/libs.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.easing-1.3.pack.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mousewheel-3.0.2.pack.js') }}" ></script>

@yield('custom_js')
</body>
</html>

