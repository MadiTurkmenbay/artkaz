@extends('layouts.main')

@section('title', __('site.categories'))

@section('content')
    <div class="page"><!-- page content -->
        <div class="container">
            <h1>{{ __('site.categories') }}</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">{{ __('site.main') }}</a></li>
                    <li><span>{{ __('site.categories') }}</span></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <img src="/assets/images/img-13.jpg">
        </div>
        <div class="container">
            <section class="cat"><!-- main catalog -->
                @foreach($categories as $category)
                    <div class="col-sm-6">
                        <a href="/catalog/{{$category->id}}" class="cat__col">
                            <div class="cat__col__img"><img src="{{$category->getImage()}}"></div>
                            <div class="cat__col__title">
                                <h5>{{$category->title}}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </section><!-- main catalog -->
        </div>
    </div>
@endsection
