@extends('layouts.base')
@section('content')
    <!--Добавить читателя в журнал чтения-->
    <div class="row">
        <form class="float-start col-md-10 mt-sm-4 mt-3 mb-3 mt-md-0" method="post"
              action="{{route('journal.update', ['record' => $record->id])}}">
            @csrf
            <h3 class="text-muted mb-3">Редактирование записи из журнала</h3>
            <div class="mb-2">
                <div class="row">
                    {{--Первая колонка--}}
                    <div class="col-md-6">
                        {{--Выбор читателя--}}
                        <label class="form-text mb-1" for="reader">Читатель</label>
                        <select required id="reader" oninput="this" name="reader[reader_id]" class="form-select">
                            @foreach($readers as $reader)
                                <option
                                    value="{{$reader->id}}">
                                    {{$reader->familyname}}
                                    {{$reader->name}}
                                    {{$reader->patronymic}}
                                </option>
                            @endforeach
                        </select>
                        {{--Выбор книги--}}
                        <label class="form-text mb-1 mt-2" for="added_at">Книга</label>
                        <select required id="reader" oninput="this" name="reader[book_id]" class="form-select">
                            @foreach($books as $book)
                                <option
                                    value="{{$book->id}}">
                                    {{$book->title}} -
                                    {{$book->author}}
                                </option>
                            @endforeach
                        </select>
                        {{--Вернул/нет--}}
                        <label class="form-text mb-1 mt-2" for="book_returned">Статус возврата</label>
                        <select required id="book_returned" oninput="this" name="reader[returned]" class="form-select">
                            <option selected value="{{$record->returned}}">
                                Текущий статус возврата: {{$record->returned == 0 ? 'не возвращено' : 'возвращено'}}
                            </option>
                            <option value="{{1}}">возвращено</option>
                            <option value="{{0}}">не возвращено</option>
                        </select>
                    </div>
                    {{--Вторая колонка--}}
                    <div class="col-md-6">
                        {{--Дата начала чтения--}}
                        <label class="form-text mb-1" for="added_at">Дата начала чтения книги</label>
                        <input class="form-control" type="text" name="reader[added_at]" value="{{$record->added_at}}"
                               id="added_at" readonly>
                        {{--Дата окончания чтения--}}
                        <label class="form-text mb-1 mt-2" for="when_return">
                            Дата возврата книги <span class="text-muted"> (текущая дата: {{$record->when_return}})</span>
                        </label>
                        <input class="form-control" type="date" name="reader[when_return]"
                               id="when_return" value="{{$record->when_return}}" required>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-4" type="submit">Применить</button>
            </div>
        </form>
    </div>
@endsection
