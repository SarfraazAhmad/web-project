{{-- @include('header',['name'=>'header'])

<h1>Home Page</h1>

@php
    $fruits=["one"=>"Banana","two"=>"Mango","three"=>"Apple"]
@endphp

@includeUnless(empty($fruits),'footer',['names'=>$fruits])

@includeIf('content') --}}

@include('pages/header')

<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title','home')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  margin: 0;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}



/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<section>
 
  <nav>
    <ul>
      @section('nav')
      <li><a href="{{ route('home')}}">Home</a></li>
      <br>
      <li><a href="{{ route('masterlayout')}}">Mater Layout</a></li>
      @show
    </ul>
  </nav>
  
  <article>
   @hasSection('content')
     @yield('content')
     @else
     <h1>Home</h1>
     <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
     <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
        @endif
  </article>
</section>
</body>
</html>

@include('/pages/footer')

