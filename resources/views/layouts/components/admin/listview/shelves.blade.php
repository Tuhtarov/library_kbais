{{--список полок--}}
<table class="align-middle table table-hover table-striped table-responsive border-start">
    <thead>
    <tr>
        <th scope="col">Наименование</th>
        <th scope="col">Slug</th>
        <th scope="col">Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach($shelves as $shelve)
    <tr>
        <th scope="row">{{$shelve->title}}</th>
        <td>{{$shelve->slug}}</td>
        <td>
            <form id="formDelete" class="d-inline" action="{{route('shelves.destroy', ['shelf' => $shelve->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">удалить</button>
            </form>

            <form id="formEdit" class="d-inline" action="{{route('shelves.edit', ['shelf' => $shelve->id])}}" method="get">
                <button type="submit" class="btn btn-outline-secondary">редактировать</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
