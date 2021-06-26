{{--Журнал чтения--}}
<div class="row bg-white">
    <p class="h3 ms-0 my-3">Журнал чтения</p>
    <div class="table-responsive">
        <table class="table table-responsive align-middle">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Книга</th>
                <th scope="col">Читатель</th>
                <th scope="col">Взял</th>
                <th scope="col">Вернёт</th>
                <th scope="col">Вернул</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($journal as $record)
                <tr class="{{$record->returned == true ? 'table-success' : 'table-danger'}}">
                    <th scope="row">{{$record->id}}</th>
                    <td>
                        <a class="btn btn-link text-decoration-none ps-0 link-dark"
                           href="{{route('books.show',['book' => $record->book->id])}}">
                            {{$record->book->title}} - {{$record->book->author}}
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-link text-decoration-none ps-0 link-dark"
                           href="{{route('readers.show',['reader' => $record->reader->id])}}">
                            {{$record->reader->getFullName()}}
                        </a>
                    </td>
                    <td>{{$record->added_at}}</td>
                    <td>{{$record->when_return}}</td>
                    <td>{{$record->returned == true ? 'Да' : 'Нет'}}</td>
                    <td>
                        {{--Кнопка отредактировать--}}
                        <div class="nav-item">
                        </div>
                        <form class="d-inline" action="{{route('journal.edit', ['record' => $record->id])}}"
                              method="get">
                            @csrf
                            <button type="submit" class="btn btn-outline-success">редактировать</button>
                        </form>
                        {{--Кнопка удалить--}}
                        <form class="d-inline" action="{{route('journal.destroy', ['record' => $record->id])}}"
                              method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
