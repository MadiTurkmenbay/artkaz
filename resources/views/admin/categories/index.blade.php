@extends('admin.layouts.layout')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('site.main')}}</a></li>
                        <li class="breadcrumb-item active">Категория</li>
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
                                    <h3 class="card-title">Список категории</h3>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <a href="{{route('admin.categories.create')}}" class="btn btn-success mb-3">Добавить
                                        категории</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            @if (count($categories))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">ID</th>
                                            <th>Изображение</th>
                                            <th>Название</th>
                                            <th>Статус</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>
                                                    <img src="{{$category->getImage()}}" alt=""
                                                         style="max-width: 200px;max-height: 200px">
                                                </td>
                                                <td>{{ $category->getTranslation('title', 'ru') }}</td>
                                                <td>
                                                    <input data-id="{{$category->id}}"
                                                           onchange="setCategoryStatus({{$category->id}})"
                                                           class="toggle-class"
                                                           type="checkbox" data-onstyle="success"
                                                           data-offstyle="danger" data-toggle="toggle"
                                                           data-on="Активен"
                                                           data-off="Неактивен" {{ $category->status ? 'checked' : '' }}>
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('admin.categories.delete', $category->id) }}"
                                                        method="post" class="float-left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Подтвердите удаление')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>Категорий пока нет...</p>
                            @endif
                        </div>
                        <div class="card-footer clearfix">
                            {{ $categories->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        function setCategoryStatus(category_id) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/admin/categories/status/update',
                data: {'category_id': category_id},
                success: function (data) {
                    console.log(data.success)
                }
            });
        }
    </script>
@endsection

