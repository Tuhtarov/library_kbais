@extends('layouts.base')

@section('content')
    <!--Информация о читателе-->
    <main class="container-fluid ps-5 pe-5">
        <h3 class="text-muted mb-4">Информация о читателе</h3>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-5 float-start">
                    <img class="img-fluid border border-secondary border-3" src="https://www.fillmurray.com/400/600"
                         alt="Читатель">
                </div>
                <div class="col-md-6 mt-sm-4 mt-3 mt-md-0">
                    <h3 class="card-title">ФИО</h3>
                    <h4 class="card-text">{{$reader->getFullName()}}</h4>
                    <hr>
                    <div class="list-group-flush">
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Возраст: {{$reader->getAge()}}</p>
                        <p class="fs-5 list-group-item-action bg-transparent border-0">Дата рождения: {{$reader->birthday}}</p>
                        <p class="list-group-item-action bg-transparent border-0"><small
                                class="text-muted">Зарегистирован: {{$reader->added_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
