{{--Раздел читателей--}}
<div class="row">
    <div class="form-label">
        <div class="accordion accordion-flush" id="accordionReader">
            <div class="accordion-item mt-1  border-bottom border-end border-2">
                <h2 class="accordion-header" id="headingReader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseReader" aria-expanded="true"
                            aria-controls="collapseReader">
                        <p class="h3">Читатели</p>
                    </button>
                </h2>
                <div id="collapseReader" class="accordion-collapse collapse"
                     aria-labelledby="headingReader"
                     data-bs-parent="#accordionReader">
                    <div class="accordion-body">
                        <div class="list-group gap-2">
                            <a href="{{route('readers.index')}}" class="btn text-start btn-secondary list-group-item">Список читателей</a>
                            <a href="{{route('readers.create')}}" class="btn btn-success text-start list-group-item">Регистрация читателя</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
