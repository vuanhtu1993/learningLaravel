<?php
/**
 * @var \App\Photo $photo
 */ ?>
<form action="{{route('photo.update',$photo)}}" method="post">
    {{method_field('PUT')}}
    {{csrf_field()}}
    <input type="text" name="name" value="<?php echo $photo->name ?>"><br>
    <input type="text" name="link" value="<?php echo $photo->link ?>"><br>
    <button type="submit">Update</button>
</form>
