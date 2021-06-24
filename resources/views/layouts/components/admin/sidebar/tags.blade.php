{{--Раздел тегов--}}
<div class="row">
    <div class="form-label">
        <div class="accordion accordion-flush" id="accordionTags">
            <div class="accordion-item mt-1  border-bottom border-end border-2">
                <h2 class="accordion-header" id="headingTags">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTags" aria-expanded="true"
                            aria-controls="collapseTags">
                        <p class="h3">Теги</p>
                    </button>
                </h2>
                <div id="collapseTags" class="accordion-collapse collapse"
                     aria-labelledby="headingTags"
                     data-bs-parent="#accordionTags">
                    <div class="accordion-body">
                        <div class="list-group gap-2">
                            <a href="{{route('tags.index')}}" class="btn text-start btn-secondary list-group-item">Список тегов</a>
                            <a href="{{route('tags.create')}}" class="btn btn-success text-start list-group-item">Создание тега</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
