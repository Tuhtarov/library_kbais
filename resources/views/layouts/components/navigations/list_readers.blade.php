{{-- Список зарегистрированных читателей --}}
<div class="row mt-4">
    <!--Поисковая строка-->
    <section class="mx-auto my-auto bg-transparent ">
        <h4 class="text-muted mt-3">Список зарегистрированных читателей</h4>
        <form class="d-flex mt-3" action="#" method="get">
            <input id="searchBook" name="search_book" class="form-control me-2 py-2"
                   type="search" placeholder="Фамилия, имя, отчество.." aria-label="Search"
                   style="max-width: 410px;">
            <button class="btn btn-outline-success" type="submit">Найти</button>
        </form>
    </section>

    <section class="mx-start my-auto mt-3 col-md-8 mb-5">
        <div class="list-group">

            <div class="accordion accordion-flush" id="accordionExample">
                <?php for ($i = 0;
                $i < 10;
                $i++): ?>
                <div class="accordion-item mt-1  border-bottom border-end border-2 bg-light">

                    <h2 class="accordion-header" id="heading<?php echo $i ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo $i ?>" aria-expanded="true"
                                aria-controls="collapse<?php echo $i ?>">
                            <?php echo '' . $i . ' Рандомный зареганный челик' ?>
                        </button>
                    </h2>

                    <div id="collapse<?php echo $i ?>" class="accordion-collapse collapse"
                         aria-labelledby="heading<?php echo $i ?>"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php
                            echo 'Дата рождения 24.01.2002 <br>';
                            echo 'Полных лет - 18 <br>';
                            echo 'Дата регистрации 15.10.2018';
                            ?>
                        </div>
                    </div>

                </div>
                <?php endfor ?>
            </div>
        </div>
    </section>
</div>
