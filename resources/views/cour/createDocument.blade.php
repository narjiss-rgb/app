<form action="{{url('/createDocument')}}" method="post" enctype="multipart/form-data">
@csrf
<input type="text" name="name">
<input type="file" name="path">
<button type="submit">send</button>
</form>