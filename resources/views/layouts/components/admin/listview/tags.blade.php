{{--список категорий--}}
<table class="table align-middle table-hover table-striped table-responsive border-start">
    <thead>
    <tr>
        <th scope="col">Имя</th>
        <th scope="col">Slug</th>
        <th scope="col">Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>
            <th scope="row">{{$tag->title}}</th>
            <td>{{$tag->slug}}</td>
            <td>
                <form id="formDelete" class="d-inline" action="{{route('tags.destroy', [$tag->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">удалить</button>
                </form>

                <form id="formEdit" class="d-inline" action="{{route('tags.edit', [$tag->id])}}" method="get">
                    <button type="submit" class="btn btn-outline-secondary">редактировать</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
