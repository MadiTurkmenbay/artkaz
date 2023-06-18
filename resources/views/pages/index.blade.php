@extends('layouts.main')

@section('title', __('site.main'))

@section('content')
    <div class="main" role="toolbar"><!-- main content -->
        <section class="slider"><!-- main slider -->
                    <div >
                        <img src="assets/images/file_1546598060_82747250.jpg">
                        <div class="slider__block" style="display: none;">
                            <span class="slider__block__title"></span>
                            <span class="slider__block__slogan"></span>
                            <a href="/catalog/439-dekorativno_prikladnoje_iskusstvo/" class="btn" tabindex="-1">{{__('site.more')}}</a>
                        </div>
                    </div>
                    <div>
                        <img src="assets/images/file_1544503152_457820125.jpg">
                        <div class="slider__block">
                            <span class="slider__block__title">{{__('site.categories')}}</span>
                            <span class="slider__block__slogan">{{ __('site.any') }}</span>
                            <a href="/catalog/" class="btn" tabindex="0">{{__('site.more')}}</a>
                        </div>
                    </div>
                    <div>
                        <img src="assets/images/file_1544593540_782498332.jpg">
                    </div>
        </section><!-- main slider -->
        <section class="cat"><!-- main catalog -->
            <div class="container">
                <div class="line">
                    <h2><a href="/catalog/">{{__('site.categories')}}</a></h2>
                </div>
                @php
                    $categories_v = $categories->slice(0, 4);
                @endphp

                @foreach($categories_v as $category)
                    <div class="col-sm-6">
                        <a href="/catalog/{{$category->id}}" class="cat__col">
                            <div class="cat__col__img"><img alt="" src="{{$category->getImage()}}"></div>
                            <div class="cat__col__title">
                                <h5>{{$category->title}}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section><!-- main catalog -->
        <section class="about"><!-- main about -->
            <div class="container">
                <h1><a href="/about">{{__('site.about')}}</a></h1>
                <div class="row">
                    <div class="col-md-6">
                        <p>{{ __('site.about_us1') }}</p><br>
                        <p>{{ __('site.about_us2') }}</p><br>
                    </div>
                    <div class="col-md-6">
                        <div class="about__figure">

                            <div class="about__figure__block wow fadeIn" data-wow-offset="0" data-wow-delay="0.1s"
                                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                                <img src="assets/images/file_1_189398767.jpg">
                            </div>

                            <div class="about__figure__block wow fadeIn" data-wow-offset="0" data-wow-delay="0.2s"
                                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                <img src="assets/images/file_1_233215557.jpg">
                            </div>
                            <div class="figure wow fadeIn" data-wow-offset="0" data-wow-delay="0.3s"
                                 style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"></div>
                            <div class="figure wow fadeIn" data-wow-offset="0" data-wow-delay="0.4s"
                                 style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- main about -->
        <section class="reviews"><!-- main reviews -->
            <div class="reviews__block">
                <div class="line">
                    <h2><a href="#">{{ __('site.reviews') }}</a></h2>
                </div>
                <div class="reviews__slider">
                        <div>
                            <p>Жақсы сайт екен, кәзіргі жағдайда, КОРОНА ВИРУС болып тұрған кезде. Себебі бізге
                                сүретшілерге, өнерімізді көрсететін және сататын жаңа жол сияқты.</p>
                            <h6>Iscander</h6>
                        </div>
                        <div >
                            <p>Была на выставке в Алматы. Народу немного, поэтому можно спокойно наслаждаться
                                действом. Картин проецируются на экраны, на колонны. Картины действительно оживают -
                                то мчится паровоз, то взлетают вороны. Все происходит под замечательную музыку.</p>
                            <h6>Ксения</h6>
                        </div>
                        <div>
                            <p>Ходили на выставку «Ван Гог. Ожившие полотна» 14 марта утром. Получили огромное
                                удовольствие.<br>Хотелось отметить, что на выставке было много детей и подростков,
                                которых организованными группами приводили учителя.</p>
                            <h6>Александра</h6>
                        </div>
                        <div >
                            <p>Я очень люблю Ван Гога, выставка оказалась грандиозным событием! Сперва мне казалось,
                                что выставка вызовет недостаточно эмоций, на деле оказалось иначе! Атмосферная
                                музыка и картины на экранах, просто завораживают! Я словно окунулся в мир искусства,
                                красоты. Есть мягкие пуфы на которых можно уютно расположиться, картины завораживают
                                и меняются! Чтобы ощутить себя настоящим художником, проникнуться искусством в
                                завершении можно и маслом написать картину.</p>
                            <h6>Геннадий</h6>
                        </div>
                        <div >
                            <p>Интересный сайт, хорошие работы, жаль что мало их. Но мне кажется это только сейчас.
                                Хотелось бы ещё и услуги художников знать, если есть таковые. Может какие то
                                короткие видео, а то хочется заказать но есть сомнения.</p>
                            <h6>Роман</h6>
                        </div>
                        <div>
                            <p>Жақсы сайт екен, кәзіргі жағдайда, КОРОНА ВИРУС болып тұрған кезде. Себебі бізге
                                сүретшілерге, өнерімізді көрсететін және сататын жаңа жол сияқты.</p>
                            <h6>Iscander</h6>

                        </div>
                        <div>
                            <p>Была на выставке в Алматы. Народу немного, поэтому можно спокойно наслаждаться
                                действом. Картин проецируются на экраны, на колонны. Картины действительно оживают -
                                то мчится паровоз, то взлетают вороны. Все происходит под замечательную музыку.</p>
                            <h6>Ксения</h6>
                        </div>
                </div>
            </div>
            <img src="assets/images/img-9.jpg">
        </section><!-- main reviews -->
        <section class="news"><!-- main news -->
            <div class="container">
                <div class="line">
                    <h2><a href="/news/">Новости</a></h2>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <a href="" class="news__col">
                            <div class="news__col__img">
                                <span class="date">10 <br> фев <br> 2021</span>
                                <img src="assets/images/file_1614185148_325953807.jpeg">
                            </div>
                            <div class="news__col__block">
                                <h6>Выставка «Өмір - Өнер»</h6>
                                <p>В картинной галерее «Жасампаз», КазНПУ имени Абая, прошла выставка «Өмір - Өнер»
                                    преподавателей кафедры «Художественного образования»</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="" class="news__col">
                            <div class="news__col__img">
                                <span class="date">18 <br> окт <br> 2019</span>
                                <img src="assets/images/file_1544590867_959353140.jpg">
                            </div>
                            <div class="news__col__block">
                                <h6>В Эрмитаже открыли новый зал античной керамики</h6>
                                <p>В Государственном Эрмитаже в Санкт-Петербурге открыли Зал ваз и постоянную экспозицию
                                    «Античная расписная керамика».</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- main news -->
    </div>
@endsection
