@extends('layouts.main')

@section('title', __('site.about'))
@section('content')
<div class="page"><!-- page content -->

    <div class="container">

        <h1>{{__('site.creative_group')}}</h1>

        <div class="breadcrumbs"><ul><li><a href="/">{{__('site.main')}}</a></li> <li><span>{{__('site.creative_group')}}</span></li></ul></div>

    </div>

    <div class="banner">

        <img src="/assets/images/img-13.jpg">

    </div>

    <div class="container about__block">

        <div class="row">



            <div class="col-md-4 col-sm-5"><img src="/cms/uploads/file_1544514154_530028878.jpg"></div>

            <div class="col-md-8 col-sm-7">

                <span class="title lineY">Руководитель проекта</span>



                <h4>
                    Ибрагимов Аман Илесович</h4>
                <p class="italic">
                    Кандидат педагогических наук,<br>
                    преподаватель кафедры «Художественного образования»</p>


            </div>


        </div>

        <h4 class="lineY">Члены проекта</h4><ul class="square--list">
            <li>
                <h4>Битореева Десмина</h4>
                <p class="italic">Магистр специальности «Искусствоведение»</p>
            </li>
            <li>
                <h4>Байгалиев Адиль</h4>
                <p class="italic">Магистр педагогических наук (физическая культура и спорт) </p>
            </li>
            <li>
                <h4>Турсунов Айбек</h4>
                <p class="italic">Студент специальности Изобразительного искусства и Черчения</p>
            </li>
            <li>
                <h4>Кунес Нурбек</h4>
                <p class="italic">Студент специальности Изобразительное искусство и черчение</p>
            </li>
        </ul>
    </div>

</div>
@endsection
