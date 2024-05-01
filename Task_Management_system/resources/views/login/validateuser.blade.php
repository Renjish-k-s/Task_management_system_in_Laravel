<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; 
    margin: 0; 
}

form {
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    width: 50%;
    padding: 20px;
    background-color: #f1f1f1; 
    border-radius: 10px; 
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); 
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin: 8px 0;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    align:center;
}

.imgcontainer {
    text-align: center;
    margin-bottom: 20px;
}

.container {
    padding: 16px;
    width: 100%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 600px) {
    form {
        width: 80%;
    }
}
</style>
</head>
<body>

<form action="action_page.php" method="post">
    <div class="imgcontainer">
        <h1>Login Form</h1>
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
      <a href="{{ route('create.user') }}">  <button type="button" class="cancelbtn">Create new user</button></a>
        <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
</form>

</body>
</html>
