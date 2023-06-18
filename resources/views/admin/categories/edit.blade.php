@extends('admin.layouts.layout')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                            <h3 class="card-title">Категория "{{ $category->title }}"</h3>
                        </div>

                        <form role="form" method="post" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group w-25">
                                    <label for="title_kz">Название kz</label>
                                    <input type="text" name="title_kz"
                                           class="form-control @error('title_kz') is-invalid @enderror" id="title_kz"
                                           value="{{ $category->getTranslation('title', 'kk') }}">
                                </div>
                                <div class="form-group w-25">
                                    <label for="title_ru">Название ru</label>
                                    <input type="text" name="title_ru"
                                           class="form-control @error('title_ru') is-invalid @enderror" id="title_ru"
                                           value="{{ $category->getTranslation('title', 'ru') }}">
                                </div>
                                <div class="form-group w-25">
                                    <label for="title_en">Название en</label>
                                    <input type="text" name="title_en"
                                           class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                           value="{{ $category->getTranslation('title', 'en') }}">
                                </div>

                                <div class="form-group w-25">
                                    <label for="poster">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="poster" id="poster"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="poster">выберите изображение</label>
                                        </div>
                                    </div>
                                    <div><img src="{{$category->getImage()}}" alt="" class="img-thumbnail mt-2" width="200"></div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

