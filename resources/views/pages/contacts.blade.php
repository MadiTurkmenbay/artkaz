@extends('layouts.main')

@section('content')
    <div class="page"><!-- page content -->
        <div class="container">
            <h1>{{__('site.contacts')}}</h1>
            <div class="breadcrumbs"><ul><li><a href="/">{{__('site.main')}}</a></li> <li><span>{{__('site.contacts')}}</span></li></ul></div>
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
                            Республика Казахстан,<br>г. Алматы, Валиханова 64                    </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contacts__col">
                        <div class="icon"><img src="/assets/images/call.svg"></div>
                        <div class="contacts__col__phone">
                            <a href="#" class="arrow"></a>
                            <ul>

                                <li><a href="tel:+7 (747) 550 31 10">+7 (747) <span>550 31 10</span></a></li>



                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contacts__col">
                        <div class="icon"><img src="/assets/images/email.svg" alt=""></div>
                        <a href="mailto:info@art-kaz.kz">info@art-kaz.kz</a>
                    </div>
                </div>
            </div>
            <h2>Форма обратной связи</h2>
            <form class="form callbackForm" method="POST" modal="true">
                <div class="input">
                    <span>Имя</span>
                    <input type="text" required="required" name="name">
                </div>
                <div class="input">
                    <span>Телефон</span>
                    <input type="text" name="tel" required="required" im-insert="true" placeholder="">
                </div>
                <div class="input">
                    <span>Email</span>
                    <input type="email" required="required" name="email">
                </div>
                <div class="input textarea">
                    <span>Сообщение</span>
                    <textarea rows="5" required="required" name="message"></textarea>
                </div>
                <div class="form__btn">
                    <div class="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfr9n8UAAAAAJh9Dh4asNSfkXcBlcfJhLKs1oD-&amp;co=aHR0cDovL3d3dy5hYmFydC5rejo4MA..&amp;hl=ru&amp;v=SglpK98hSCn2CroR0bKRSJl5&amp;size=normal&amp;cb=2d231okliog" width="304" height="78" role="presentation" name="a-7wclrylci6h2" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                    <button type="submit" class="btn">Отправить</button>
                </div>
                <div class="result"></div>
                <div id="modal--finish" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                <h4>Ваше письмо отправлено!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="map">
            <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;um=constructor%3A007bddb7b12f51c0298f1c2dcf92870e083bdbbe52f5127601c5565ff17baace" frameborder="0" allowfullscreen="true" width="100%" height="100%" style="display: block;"></iframe>    </div>
    </div>
@endsection
