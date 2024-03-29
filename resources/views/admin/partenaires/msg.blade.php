@if(errors->any())

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close"
        onclick="this.parentElement.style.display='none'">x</button>
        <span>
            <b> Danger - </b>{{ $error }}</span>
    </div>
    @endforeach
</ul>
</div>
@endif

@if(session('successMsg'))
                    <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close"
                                onclick="this.parentElement.style.display='none'">x</button>
                                <span>
                                    <b> Danger - </b>{{ session('successMsg') }}</span>
                            </div>
                    @endif