<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <style>

.container
{
  margin-top:5%;
  width:65%;
  background-color:rgb(0,0,0,0.3);
  padding: 10px;
  border-radius:50px;
}
button
{
  margin-left:45%;
}


  </style>
<div class="container">
<form action="" method="post">
  @csrf

  <div class="form-group">
  <h1 align="center"> Registration form</h1>
   
  </div>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
 
  </div>

 
  
  <div class="form-group">
    <label>Set your email as username</label>
    <input type="email" class="form-control" name="dob" placeholder="Set your username">
 
  </div>
  
  <div class="form-group">
    <label>Set your password</label>
    <input type="text" class="form-control" name="dob" placeholder="Set your password ">
 
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>