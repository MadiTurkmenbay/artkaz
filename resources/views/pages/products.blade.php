@extends('layouts.main')


@section('title', __('site.categories'). ' '. $category->title)

@section('content')
    <div class="page"><!-- page content -->
        <div class="container">
            <h1>{{ $category->title }}</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">{{__('site.main')}}</a></li>
                    <li><a href="/catalog/">{{__('site.categories')}}</a></li>
                    <li><span>{{ $category->title }}</span></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <img src="/assets/images/img-13.jpg">
        </div>
        <div class="container">
            <div class="filter">
                <div class="filter__col">
                    <ul>
                        <li class="active"><a href="#"><img src="/assets/images/menu.svg"></a></li>
                        <li name="ReGroup"><a href="#"><img src="/assets/images/list.svg"></a></li>
                    </ul>
                </div>
                <div class="filter__col">
{{--                    <div class="dropdown">--}}
{{--                        <span class="old">--}}
{{--                            <select class="selectFilt" data-id="438" id="EasyDropDown9086EF">--}}
{{--                            <option value="new">По новинкам</option>--}}
{{--                            <option value="price_asc">По возрастанию цены</option>--}}
{{--                            <option value="price_desc">По убыванию цены</option>--}}
{{--                        </select></span><span class="selected">По новинкам</span><span class="carat"></span>--}}
{{--                        <div>--}}
{{--                            <ul>--}}
{{--                                <li class="active">По новинкам</li>--}}
{{--                                <li>По возрастанию цены</li>--}}
{{--                                <li>По убыванию цены</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="cat--inside">
                @foreach($products->items() as $product)
                    <div class="cat--inside__col">
                        @if($product->created_at < now()->addWeek())
                            <span class="stiker">new</span>
                        @endif
                        <a href="#moda470" class="cat--inside__col__img" data-fancybox="group"><span
                                class="zoom"></span><img src="{{$product->getImage()}}"></a>
                        <a href="/catalog/{{$category->id}}/{{$product->id}}" class="cat--inside__col__block">
                            <h4>{{$product->title}}</h4>
                            <ul>
                                <li>
                                    <strong>{{__('site.artist')}}:</strong>&nbsp;{{$product->artist}}
                                </li>
                                <li>
                                    <strong>{{__('site.size')}}: </strong> {{$product->size}}
                                </li>
                                <li>
                                    <strong>{{__('site.material')}}: </strong> {{$product->material}}
                                </li>
                            </ul>

                            <span class="price">{{$product->price}} тг</span>
                            <span class="btn">{{__('site.more')}}</span>
                        </a>
                        <div class="cat--inside__col__modal" style="display: none;" id="moda470">
                            <div class="img">
                                <img src="{{$product->getImage()}}">
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $products->links('vendor.pagination.default') }}
{{--            <div class="pagination">--}}
{{--                <ul>--}}
{{--                    <li class="active"><a href="javascript:void(0)">1</a></li>--}}
{{--                    <li><a href="/catalog/438-zhivopis/pg/2/">2</a></li>--}}
{{--                    <li><a href="/catalog/438-zhivopis/pg/3/">3</a></li>--}}
{{--                    <li class="next"><a href="/catalog/438-zhivopis/pg/2/"></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
