<h1>TRENI</h1>
@foreach ($trains as $train)
    <div>
        {{ $train->code }}
    </div>
@endforeach
