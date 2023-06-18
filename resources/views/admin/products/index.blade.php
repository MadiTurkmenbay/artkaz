@extends('admin.layouts.layout')
@section('admin_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Продукты</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Продукты</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="card-title">Список продуктов</h3>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <a href="{{route('admin.products.create')}}" class="btn btn-success mb-3">Добавить
                                        продукт</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(count($products))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">ID</th>
                                            <th>Изображение</th>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            <th>Цена</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        @foreach($products as $product)
                                                <tbody>
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>
                                                        <img src="{{$product->getImage()}}" alt=""
                                                             style="max-width: 200px;max-height: 200px">
                                                    </td>
                                                    <td>{{ $product->getTranslation('title', 'ru') }}</td>
                                                    <td>@if(isset($product->category))
                                                            {{ $product->category->getTranslation('title', 'ru') }}
                                                        @else
                                                            категория еще нету
                                                        @endif</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>
                                                        <div class="action" style="display: flex;">

                                                            <a href="{{route('admin.products.edit',$product->id)}}"
                                                               class="btn btn-info btn-sm float-left mr-1">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>

                                                            <form
                                                                action="{{route('admin.products.delete',$product->id)}}"
                                                                method="post" class="float-left">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Подтвердите удаление')">
                                                                    <i
                                                                        class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </div>

                                                    </td>
                                                </tr>
                                                </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            @else
                                <p>Продукт пока нет...</p>
                            @endif
                        </div>
                        <div class="card-footer clearfix">
                            {{ $products->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        function searchFilter() {
            $('#search').submit();
        }

        function setCourseStatus(course_id) {
            $.ajax({
           data: {'course_id': course_id},
                type: "GET",
                dataType: "json",
                url: '/admin/courses/status/update',
                success: function (data) {
                    console.log(data.success)
                }
            });
        }
    </script>
@endsection

