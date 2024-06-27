<h1>Student Details</h1>

@foreach ($data as $id => $student)
    <h3>Name: {{ $student->name }}</h3>
    <h3>Email: {{ $student->email }}</h3>
    <h3>City: {{ $student->city }}</h3>
@endforeach
