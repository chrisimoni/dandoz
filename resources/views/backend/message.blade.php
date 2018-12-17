@if(count($errors) > 0)
    <div class="alert alert-danger" style="font-size: 12px;">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success" style="font-size: 12px;">
        {{ session('success') }}
    </div>
@endif

@if(session('failed'))
    <div class="alert alert-danger" style="font-size: 12px;">
        {{ session('failed') }}
    </div>
@endif