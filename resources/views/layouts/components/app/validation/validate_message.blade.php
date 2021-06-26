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
    @if($errors->count() > 0)
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                <li>
                    <p class="fs-5">
                        {{ $error }} <i class="fas fa-check-circle fs-5"></i>
                    </p>
                </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
