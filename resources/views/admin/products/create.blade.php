@extends('admin.layouts.layout')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новый продукт</h1>
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
                            <h3 class="card-title">Новый продукт</h3>
                        </div>
                        <form role="form" method="post" action="{{route('admin.products.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="d-flex mb-2" style="gap: 10px;">
                                    <input type="text" name="title_kz"
                                           class="form-control @error('title_kz') is-invalid @enderror" id="title_kz"
                                           placeholder="Название kz">
                                    <input type="text" name="title_ru"
                                           class="form-control @error('title_ru') is-invalid @enderror" id="title_ru"
                                           placeholder="Название ru">
                                    <input type="text" name="title_en"
                                           class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                           placeholder="Название en">
                                </div>

                                <div class="d-flex mb-2" style="gap: 10px;">
                                    <input type="text" name="artist_kz"
                                           class="form-control @error('artist_kz') is-invalid @enderror" id="artist_kz"
                                           placeholder="Художник kz">

                                    <input type="text" name="artist_ru"
                                           class="form-control @error('artist_ru') is-invalid @enderror" id="artist_ru"
                                           placeholder="Художник ru">

                                    <input type="text" name="artist_en"
                                           class="form-control @error('artist_en') is-invalid @enderror" id="artist_en"
                                           placeholder="Художник en">
                                </div>
                                <div class="form-group w-50">
                                    <label for="title">Размер</label>
                                    <input type="text" name="size"
                                           class="form-control @error('size') is-invalid @enderror" id="size"
                                           placeholder="Размер">
                                </div>

                                <div class="d-flex mb-2" style="gap: 10px;">
                                    <input type="text" name="material_kz"
                                           class="form-control @error('material_kz') is-invalid @enderror"
                                           id="material_kz"
                                           placeholder="Материал kz">

                                    <input type="text" name="material_ru"
                                           class="form-control @error('material_ru') is-invalid @enderror"
                                           id="material_ru"
                                           placeholder="Материал ru">

                                    <input type="text" name="material_en"
                                           class="form-control @error('material_en') is-invalid @enderror"
                                           id="material_en"
                                           placeholder="Материал en">
                                </div>
                                <div class="form-group w-50">
                                    <label for="price">Цена</label>
                                    <input type="number" name="price"
                                           class="form-control @error('price') is-invalid @enderror" id="price"
                                           placeholder="Цена">
                                </div>


                                <div class="form-group  w-50">
                                    <label for="description_kz">Описания kz</label>
                                    <textarea name="description_kz"
                                              class="form-control @error('description_kz') is-invalid @enderror"
                                              id="description_kz" rows="3" placeholder="Описания kz..."></textarea>
                                </div>

                                <div class="form-group  w-50">
                                    <label for="description_ru">Описания ru</label>
                                    <textarea name="description_ru"
                                              class="form-control @error('description_ru') is-invalid @enderror"
                                              id="description_ru" rows="3" placeholder="Описания ru..."></textarea>
                                </div>

                                <div class="form-group  w-50">
                                    <label for="description_en">Описания en</label>
                                    <textarea name="description_en"
                                              class="form-control @error('description_en') is-invalid @enderror"
                                              id="description_en" rows="3" placeholder="Описания en..."></textarea>
                                </div>

                                <div class="form-group  w-50">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror"
                                            id="category_id" name="category_id">
                                    @foreach($categories as $k => $v)
                                            <option value="{{$k}}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group  w-50">
                                    <label for="poster">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="poster" id="poster"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="poster">Выбрать файл</label>
                                        </div>
                                    </div>
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
