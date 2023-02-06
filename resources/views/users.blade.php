<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <a href="/form">add users</a>
 <h1>welcome to users</h1>
 <table border="1">
  <th>id</th>
  <th>name</th>
  <th>email</th>
  <th colspan="2">operations</th>
  @foreach ($userdata as $item)
  <tr>

   <td>{{ $item->id }}</td>
   <td>{{ $item->name }}</td>
   <td>{{ $item->email }}</td>
   <td>

    <a href="{{url('edituser/'.$item->id)}}" class="btn btn-danger btn-sm">Edit</a>
   </td>
   <td>
    <a href="{{url('deleteuser/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
   </td>
  </tr>
  @endforeach



 </table>
 <h1>passport table</h1>
 <table border="1">
  <th>id</th>
  <th>user_id</th>
  <th>pass_num</th>
  <th colspan="2">operations</th>
  @foreach ($passport as $item)
  <tr>
   <td>{{ $item->id }}</td>
   <td>{{ $item->user_id }}</td>
   <td>{{ $item->passport_number }}</td>
   <td>
    <a href="{{url('editpass/'.$item->id)}}" class="btn btn-danger btn-sm">Edit</a>
   </td>
   <td>
    <a href="{{url('deletepassport/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
   </td>
  </tr>
  @endforeach

 </table>
</body>

</html>