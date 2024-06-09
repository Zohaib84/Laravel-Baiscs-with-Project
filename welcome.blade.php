@php
    $fruits = [1 => "Apple", 2 => "Orange", 3 => "Banana", 4 => "Mango"];
@endphp

@include('pages.header',["names" => $fruits])


<h1>Home : First Page</h1>

@include('pages.footer')