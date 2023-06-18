@extends('admin.layouts.layout')

@section('admin_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Глава</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Глава</li>
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
                                    <h3 class="card-title">Список глава</h3>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <a href="{{route('admin.chapters.create',$course->id)}}" class="btn btn-success mb-3">Добавить
                                        глава</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        @foreach($course->chapters as $chapter)
                                            @if($chapter->status == 3)

                                            @else
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" style="
    position: relative;
" id="flush-heading{{$chapter->id}}">
                                                        <div class="accordion-button collapsed" type="button"
                                                             data-bs-toggle="collapse"
                                                             data-bs-target="#flush-collapse1{{$chapter->id}}"
                                                             aria-expanded="false"
                                                             aria-controls="flush-collapse1{{$chapter->id}}">
                                                            <div class="accordion-content d-flex align-items-center"
                                                                 style="width: 100%;justify-content: space-between;">
                                                                <div class="accordion-content__title" >
                                                                    {{$chapter->title}}
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="accordion-content__action"
                                                             style="margin-right: 15px;position: absolute;right: 31px;top: 9px;z-index: 10">
                                                            <a href="{{route('admin.lessons.create',[$course->id,$chapter->id])}}"
                                                               class="btn btn-success btn-sm float-left mr-1">
                                                                <i class="fas fa-plus"></i>
                                                            </a>
                                                            <a href="{{route('admin.chapters.edit',$chapter->id)}}"
                                                               class="btn btn-info btn-sm float-left mr-1">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>

                                                            <form
                                                                action="{{route('admin.chapters.delete',$chapter->id)}}"
                                                                method="post" class="float-left" style="
    margin-top: -7px;
">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                        class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Подтвердите удаление')">
                                                                    <i
                                                                        class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </h2>

                                                    <div id="flush-collapse1{{$chapter->id}}"
                                                         class="accordion-collapse collapse"
                                                         aria-labelledby="flush-heading{{$chapter->id}}"
                                                         data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            @if(count($chapter->lessons))
                                                                <div class="table-responsive">
                                                                    <table
                                                                        class="table table-bordered table-hover text-nowrap">

                                                                        <tbody>
                                                                        @foreach($chapter->lessons as $lesson)
                                                                            @if($lesson->status == 3)

                                                                            @else
                                                                                <tr>
                                                                                    <td>{{$lesson->id}}</td>
                                                                                    <td class="w-25">
                                                                                        <img src="{{$lesson->getImage()}}"
                                                                                             alt=""
                                                                                             style="max-width: 200px;max-height: 200px;">
                                                                                    </td>
                                                                                    <td>{{$lesson->title}}</td>
                                                                                    <td>{!! $lesson->description !!}</td>
                                                                                    <td>{{$lesson->is_promo}}%</td>
                                                                                    <td>
                                                                                        <a href="{{route('admin.lessons.edit',$lesson->id)}}"
                                                                                           class="btn btn-info btn-sm float-left mr-1">
                                                                                            <i class="fas fa-pencil-alt"></i>
                                                                                        </a>

                                                                                        <form
                                                                                            action="{{route('admin.lessons.delete',$lesson->id)}}"
                                                                                            method="post" class="float-left">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button type="submit"
                                                                                                    class="btn btn-danger btn-sm"
                                                                                                    onclick="return confirm('Подтвердите удаление')">
                                                                                                <i
                                                                                                    class="fas fa-trash-alt"></i>
                                                                                            </button>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr>
                                                                            @endif
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            @else
                                                                <p>Уроки пока нет...</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            dscosdcsdcimsdc
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

