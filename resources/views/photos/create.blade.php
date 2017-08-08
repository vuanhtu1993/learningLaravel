<form action="{{route('photo.store')}}" method="post">
    {{csrf_field()}}
   Image link <input type="text" name="image_url">
    FirstName: <input type="text" name="title">

    <button type="submit">Submit</button>
</form>