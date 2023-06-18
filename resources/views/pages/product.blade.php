@extends('layouts.main')

@section('title', $product->title)

@section('content')
    <div class="page"><!-- page content -->
        <div class="container">
            <h1>{{$product->title}}</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">{{__('site.main')}}</a></li>
                    <li><a href="/catalog/">{{__('site.categories')}}</a></li>
                    <li><a href="/catalog/{{$category->id}}/">{{ $category->title }}</a></li>
                    <li><span>{{$product->title}}</span></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <img src="/assets/images/img-13.jpg">
        </div>
        <div class="container">
            <div class="cat--unit">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="cat--unit__img">

                            <span class="zoom"></span>
                            <div class="cat--unit__for">
                                <a
                                    href="{{ $product->getImage() }}" data-fancybox="group">
                                    <img alt="s"  src="{{$product->getImage()}}">
                                </a>
                            </div>
                        </div>
                        <div class="cat--unit__nav">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <span class="price"> {{ $product->price }} тг</span>
                        <h4 class="cat--unit__title">{{ $product->title }}</h4>

                        <ul>
                            <li>
                                <strong>{{__('site.artist')}}: </strong> {{ $product->artist }}
                            </li>
                            <li>
                                <strong>{{__('site.size')}}: </strong> {{ $product->size }}
                            </li>
                            <li>
                                <strong>{{__('site.material')}}: </strong> {{ $product->material }}
                            </li>
                        </ul>

                        <div class="cat--unit__block">
                            <p><strong>{{__('site.description')}}:</strong> {{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
