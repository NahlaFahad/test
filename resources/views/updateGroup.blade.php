<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   <div class='container'>
    <div class='row'>
        <div class=col-md-7>
            <form method="post" action="{{route('group-put')}}">
                @csrf
                <input type="text" name="name" class="form-control" value="{{$group->group_name}}">
                <input type="hidden" name="groupid" value="{{$group->id}}">
                <input type="submit" class="btn btn-info" value="Update Group">
            </form>
        </div>
    </div>
   </div> 

   
</body>
</html>