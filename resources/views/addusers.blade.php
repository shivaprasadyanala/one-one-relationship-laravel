<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="/add" method="post">
  @csrf
  <label for="">name</label>
  <input type="text" name="name"><br>
  <label for="">email</label>
  <input type="email" name="email"><br>
  <label for="">password number</label>
  <input type="text" name="pass_num"><br>
  <input type="submit" value="adduser">
 </form>
</body>

</html>