@if (count($errors) > 0)
    <div class="alert alert-danger center-block" style="margin-top:50px;margin-bottom: 0px">
        <ul>
            @foreach($errors->all() as $error)
                <li style="background-color:#f2dede">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif