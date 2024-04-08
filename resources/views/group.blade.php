<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   <div class='container'>
    <div class='row'>
        <div class=col-md-7>
            <form method="POST" action="{{route('group-post')}}">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Group Name">
                <input type="submit" class="btn btn-info" value="Create Group">
            </form>
        </div>
    </div>
   </div> 

   <div class=col-md-11>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Group Name 
                </th>
                <th>
                    Edit 
                </th>
                <th>
                    Show item
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group )
                <tr>
                    <td>{{$group->group_name}}</td>
                    <td><a href="{{route('group-update',$group->id)}}" class='btn btn-info'>Edit</a></td>
                    <td><a href="{{route('items',$group->id)}}" class='btn btn-info'>Show item</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
   </div>
</body>
</html>