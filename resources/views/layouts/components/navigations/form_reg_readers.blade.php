<!--Регистрация читателя-->
<div class="row">
    <div class="accordion col-md-6 mt-2" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true"
                        aria-controls="flush-collapseOne">
                    <b>Регистрация читателя</b>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                 data-bs-parent="#accordionFlushExample">
                <form class="accordion-body row col-md-12 ">
                    <div class="col-md-6">
                        <label class="form-label fs-5 mt-2" for="lastName">Фамилия</label>
                        <input id="lastName" type="text" class="form-control" aria-label="Фамилия" required>
                        <label class="form-label fs-5 mt-2" for="firstName">Имя</label>
                        <input id="firstName" type="text" class="form-control" aria-label="Имя" required>
                        <label class="form-label fs-5 mt-2" for="patronymic">Отчество</label>
                        <input id="patronymic" type="text" class="form-control" aria-label="Отчество" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fs-5 mt-2" for="birthdate">Дата рождения</label>
                        <input id="birthdate" type="date" class="form-control" aria-label="Дата рождения" required>
                        <label class="form-label fs-5 mt-2" for="datetime">Дата регистрации</label>
                        <input id="datetime" type="text" value="<?php echo date("d.m.Y H:i"); ?>"
                               class="form-control" required aria-label="Дата регистрации" readonly>
                    </div>
                    <div class="d-block mt-4 mb-3">
                        <button class="btn btn-outline-primary mx-auto">Зарегистрировать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
