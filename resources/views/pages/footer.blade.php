{{-- <h1>Footer Page</h1> --}}

{{-- @foreach ($names as $name)
    {{ $name}} <br>
@endforeach --}}

{{-- @forelse ($names as $key=>$name)
   {{$key}}-{{$name}} <br>
@empty
    ('not found');
@endforelse --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}
    </style>
</head>
<body>
    <footer>
        <p>Footer</p>
      </footer>
</body>
</html>


