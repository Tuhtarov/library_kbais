{{--Раздел категории--}}
<div class="row">
    <div class="form-label">
        <div class="accordion accordion-flush" id="accordionBook">
            <div class="accordion-item mt-1  border-bottom border-end border-2">
                <h2 class="accordion-header" id="headingBook">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseBook" aria-expanded="true"
                            aria-controls="collapseBook">
                        <p class="h3">Книги</p>
                    </button>
                </h2>
                <div id="collapseBook" class="accordion-collapse collapse"
                     aria-labelledby="headingBook"
                     data-bs-parent="#accordionBook">
                    <div class="accordion-body">
                        <div class="list-group gap-2">
                            <a href="{{route('books.index')}}" class="btn text-start btn-secondary list-group-item">Каталог книг</a>
                            <a href="{{route('books.create')}}" class="btn btn-success text-start list-group-item">Добавление книги</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
