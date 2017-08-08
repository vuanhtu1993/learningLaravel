<?php
foreach ($photos as $photo){
    echo $photo->name;
    echo "<img src='$photo->link'>";
    echo "
<form action='".route('photo.update', $photo->id)."' method='post'>
".method_field('PUT')."
".csrf_field()."
<button type='submit'>Delete</button>
<a href='".route('photo.edit')."'>Update</a>
</form>
";
}
?>
