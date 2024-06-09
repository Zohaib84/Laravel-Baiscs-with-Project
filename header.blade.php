<h1>Header Page</h1>

@forelse ($name as $key => $value)
<p>{{$key}} - {{$value}}</p>
@empty
    <p>No value found.</p>
@endforelse