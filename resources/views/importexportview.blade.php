<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>


    <form action="{{url('/import')}}" method="post" enctype="multipart/form-data">

        @csrf

        <input type="file" name="file">

        <input type="submit" value="Import Data">
    </form>

</body>
</html>
