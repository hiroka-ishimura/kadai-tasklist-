@if(count($errors) > 0)
    <ul class="alert alert-danger" roll="alert">
        @foreach($errors->all() as $error)
            <li class="ml-5">{{ $error }}</li>
        @endforeach
    </ul>
@endif