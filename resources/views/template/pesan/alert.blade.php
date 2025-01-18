@if ($errors->any())
    <div class="alert alert-denger">
        <ul>
            @foreach ($errores->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif