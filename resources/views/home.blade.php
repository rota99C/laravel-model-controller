@extends ('layout.app')

@section ('content')
@foreach ($movies as $movie)
<h1>{{$movie -> title}}</h1>
<p>{{$movie -> original_title}}</p>
<p>{{$movie -> nationaly}}</p>
<p>{{$movie -> date}}</p>
<p>{{$movie -> vote}}</p>
@endforeach

@endsection