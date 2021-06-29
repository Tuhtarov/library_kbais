    {{--Создание тега--}}
    <div class="row mx-auto col-md-4 my-5">
        <form action="{{route('tags.store')}}" method="POST">
            @csrf
            <label class="text-muted fs-5 form-label" for="newTag">Быстрое создание тега</label>
            <div class="input-group mb-3">
                <input id="newTag" name="tag[title]" type="text" placeholder="пр: пролюбовь, мир" class="form-control rounded-0 me-3">
                <span class="input-group-append">
                    <button type="submit" class="btn btn-success">Создать</button>
                  </span>
            </div>
        </form>
    </div>
