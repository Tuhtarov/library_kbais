{{--Раздел категорий--}}
<div class="row">
    <div class="form-label">
        <div class="accordion accordion-flush" id="accordionCategory">
            <div class="accordion-item mt-1  border-bottom border-end border-2">
                <h2 class="accordion-header" id="headingCategory">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseCategory" aria-expanded="true"
                            aria-controls="collapseCategory">
                        <p class="h3">Категории</p>
                    </button>
                </h2>
                <div id="collapseCategory" class="accordion-collapse collapse"
                     aria-labelledby="headingCategory"
                     data-bs-parent="#accordionCategory">
                    <div class="accordion-body">
                        <div class="list-group gap-2">
                            <a href="{{route('categories.index')}}" class="btn text-start btn-secondary list-group-item">Список категорий</a>
                            <a href="{{route('categories.create')}}" class="btn btn-success text-start list-group-item">Создание категории</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
