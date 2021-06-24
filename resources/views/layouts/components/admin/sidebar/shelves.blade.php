{{--Раздел полок--}}
<div class="row">
    <div class="form-label">
        <div class="accordion accordion-flush" id="accordionShelves">
            <div class="accordion-item mt-1  border-bottom border-end border-2">
                <h2 class="accordion-header" id="headingShelves">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseShelves" aria-expanded="true"
                            aria-controls="collapseShelves">
                        <p class="h3">Полки</p>
                    </button>
                </h2>
                <div id="collapseShelves" class="accordion-collapse collapse"
                     aria-labelledby="headingShelves"
                     data-bs-parent="#accordionShelves">
                    <div class="accordion-body">
                        <div class="list-group gap-2">
                            <a href="{{route('shelves.index')}}" class="btn text-start btn-secondary list-group-item">Список полок</a>
                            <a href="{{route('shelves.create')}}" class="btn btn-success text-start list-group-item">Добавление полки</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
