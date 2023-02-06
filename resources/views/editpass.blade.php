<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="/updatepass/{{$pass->id}}" method="post">
  @csrf
  <label for="">passport number</label>
  <input type="text" name="pass_num" value="{{$pass->pass_num}}"><br>
  <input type="submit" value="update">
 </form>
</body>

</html>