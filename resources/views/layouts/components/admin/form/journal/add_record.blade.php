<!--Добавить читателя в журнал чтения-->
<div class="row">
    <form class="float-start col-md-5 mt-sm-4 mt-3 mb-3 mt-md-0" method="post"
          action="{{route('main.journal.add')}}">
        @csrf
        <h3 class="text-muted mb-3">Добавить читателя</h3>
        {{--Произведение--}}
        <div class="mb-2">
            <select required oninput="this" name="reader[id]" class="form-select">
                @foreach($readers as $reader)
                    <option value="{{$reader->id}}">{{$reader->familyname}} {{$reader->name}} {{$reader->patronymic}}</option>
                @endforeach
            </select>
        </div>
        <input type="text" name="{{date('Y-m-d H:i:s')}}" hidden value="dsfsdf">
        <button class="btn btn-primary mt-2" type="submit">Добавить</button>
    </form>
</div>
