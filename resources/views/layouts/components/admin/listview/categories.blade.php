{{--список категорий--}}
<table class="table align-middle table-hover table-striped table-responsive border-start">
    <thead>
    <tr>
        <th scope="col">Наименование</th>
        <th scope="col">Slug</th>
        <th scope="col">Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <th scope="row">
                <a class="text-decoration-none link-dark" href="{{route('search.books.category.slug', ['slug' => $category->slug])}}">
                    {{$category->title}}
                </a>
            </th>
            <td>{{$category->slug}}</td>
            <td>
                <form id="formDelete" class="d-inline" action="{{route('categories.destroy', [$category->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">удалить</button>
                </form>

                <form id="formEdit" class="d-inline" action="{{route('categories.edit', [$category->id])}}" method="get">
                    <button type="submit" class="btn btn-outline-secondary">редактировать</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
