<!--Регистрация читателя-->
<div class="row">
    <div class="col-md-6 mt-2">
        <form class="row col-md-12" action="{{route('readers.store')}}" method="POST">
            @csrf
            <div class="col-md-6">
                <label class="form-label fs-5 mt-2" for="lastName">Фамилия</label>
                <input id="lastName" name="familyname" type="text" class="form-control" aria-label="Фамилия" required>
                <label class="form-label fs-5 mt-2" for="firstName">Имя</label>
                <input id="firstName" name="name" type="text" class="form-control" aria-label="Имя" required>
                <label class="form-label fs-5 mt-2" for="patronymic">Отчество</label>
                <input id="patronymic" name="patronymic" type="text" class="form-control" aria-label="Отчество" required>
            </div>
            <div class="col-md-6">
                <label class="form-label fs-5 mt-2" for="birthdate">Дата рождения</label>
                <input id="birthdate" name="birthday" type="date" class="form-control" aria-label="Дата рождения" required>
                <label class="form-label fs-5 mt-2" for="datetime">Дата регистрации</label>
                <input id="datetime" name="added_at" type="text" value="<?php echo date("Y-m-d H:i:s"); ?>"
                       class="form-control" required aria-label="Дата регистрации" readonly>
            </div>
            <div class="d-block mt-4 mb-3">
                <button class="btn btn-outline-primary mx-auto" >Зарегистрировать</button>
            </div>
        </form>
    </div>
</div>
