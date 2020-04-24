@foreach ($docs as $doc)
<video width="320" height="240" controls>
    
<source src="{{asset('storage/'.$doc->path)}}" type="video/mp4">
</video>
<p>{{$doc->name }}</p>
@endforeach