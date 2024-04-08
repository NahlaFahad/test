<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   <div class='container'>
    <div class='row'>
        <div class=col-md-7>
            <form method="POST" action="{{route('addItem')}}">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="item Name">
                <input type="number" name="count" class="form-control" placeholder="item count">
                <input type="text" name="price" class="form-control" placeholder="item price">
                <input type="hidden" name="group_id" class="form-control" value="{{$items['id']}}">

                <input type="submit" class="btn btn-info" value="Create item">
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
                    price 
                </th>
                <th>
                Count
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items['items'] as $item )
                <tr>
                    <td>{{$item->item_name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->count}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
   </div>
</body>
</html>