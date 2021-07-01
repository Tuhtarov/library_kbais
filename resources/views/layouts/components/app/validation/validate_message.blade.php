<div class="row col-md-4 text-start mx-start">
    @if(session('success'))
        <div class="alert alert-success">
            <ul class="list-unstyled">
                <li>
                    <p class="fs-5">
                        {{ session('success') }} <i class="fas fa-check-circle fs-5"></i>
                    </p>
                </li>
            </ul>
        </div>
    @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Ошибочное заполнение формы.</h6>
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>
