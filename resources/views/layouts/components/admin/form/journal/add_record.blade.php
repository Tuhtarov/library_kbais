<!--Добавить читателя в журнал чтения-->
<div class="row">
    <form class="float-start col-md-10 mt-sm-4 mt-3 mb-3 mt-md-0" method="post"
          action="{{route('journal.add')}}">
        @csrf
        <h3 class="text-muted mb-3">Добавить читателя в журнал</h3>
        <div class="mb-2">
            <div class="row">
                {{--Первая колонка--}}
                <div class="col-md-6  d-grid gap-1">
                    {{--Выбор читателя--}}
                    <label class="form-text mb-1" for="reader">Читатель</label>
                    <select required id="reader" oninput="this" name="record[reader_id]" class="form-control select2">
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
                    <label class="form-text mb-1" for="book">Книга</label>
                    <select required id="book" oninput="this" name="record[book_id]" class="form-control select2">
                        @foreach($books as $book)
                            <option
                                value="{{$book->id}}">
                                {{$book->title}} -
                                {{$book->author}}
                            </option>
                        @endforeach
                    </select>
                </div>
                {{--Вторая колонка--}}
                <div class="col-md-6 d-grid gap-1">
                    {{--Дата начала чтения--}}
                    <label class="form-text mb-1" for="added_at">Дата начала чтения книги</label>
                    <input class="form-control" type="text" name="record[added_at]" value="{{date('Y-m-d H:i:s')}}"
                           id="added_at" readonly>
                    {{--Дата окончания чтения--}}
                    <label class="form-text mb-1" for="when_return">Дата возврата книги</label>
                    <input class="form-control" type="date" name="record[when_return]"
                           id="when_return" required>
                </div>
            </div>
            <button class="btn btn-outline-primary mt-4" type="submit">Добавить</button>
        </div>
    </form>
</div>

