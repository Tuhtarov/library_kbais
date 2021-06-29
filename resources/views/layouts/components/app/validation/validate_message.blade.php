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
    @if(count($errors))
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors as $error)
                <li>
                    <p class="fs-5">
                        {{ $error }}
                    </p>
                </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
