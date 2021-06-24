{{-- Список зарегистрированных читателей --}}
<div class="row mt-4">
    <!--Поисковая строка-->
    <section class="mx-auto my-auto bg-transparent ">
        <h4 class="text-muted mt-3">Список зарегистрированных читателей</h4>
        <form class="d-flex mt-3" action="#" method="get">
            <input id="searchBook" name="search_book" class="form-control me-2 py-2"
                   type="search" placeholder="Фамилия, имя, отчество.." aria-label="Search"
                   style="max-width: 410px;">
            <button class="btn btn-outline-success" type="submit">Найти</button>
        </form>
    </section>

    <section class="mx-start my-auto mt-3 col-md-8 mb-5">
        <div class="list-group">
            <div class="accordion accordion-flush" id="accordionExample">
                @if(count($listOfReaders))
                @foreach($listOfReaders as $reader)
                <div class="accordion-item mt-1  border-bottom border-end border-2 bg-light">
                    <h2 class="accordion-header" id="heading{{$reader->id}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{$reader->id}}" aria-expanded="true"
                                aria-controls="collapse{{$reader->id}}">{{$reader->familyname}} {{$reader->name}} {{$reader->patronymic}}</button>
                    </h2>
                    <div id="collapse{{$reader->id}}" class="accordion-collapse collapse"
                         aria-labelledby="heading{{$reader->id}}"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Дата рождения: {{$reader->birthday}}</p>
                            <p>Полных лет: {{$reader->getAge()}}</p>
                            <p>Дата регистрации: <span class="text-success">{{$reader->added_at}}</span></p>
                            <a class="btn btn-link link-secondary text-decoration-none" href="{{route('readers.edit', ['reader' => $reader->id])}}">Редактирование</a>
                            <div class="d-inline">
                                <form class="d-inline" action="{{route('readers.destroy', ['reader' => $reader->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-decoration-none link-danger">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <h3 class="mt-4 text-muted fa fa-sad-tea">Список пуст</h3>
                @endif
            </div>
        </div>
    </section>
</div>
