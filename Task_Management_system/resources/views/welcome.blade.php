<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
         body {
            background-image: url("{{ asset('images/time2.webp') }}");
            /* background-size: cover; Cover the entire viewport */
            background-position: center; /* Center the image */
        }
        .centered {
            height: 45%; 
            width: 90%; 
            position: fixed; 
            top: 50%; 
            left: 50%;
            transform: translate(-50%, -50%); 
            border-radius: 50px; 
            background-color: rgba(0, 0, 0, 0.2);
            
            align-items: center;
            justify-content: center; 
            display: flex; 
            padding: 20px; 
        }

        .centered:hover {
            /* background-color: white;  */
            color: red; 
        }

        .h1class {
            text-align: center; 
            color:white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">Your</span> Task Manager</a>
            <a href="{{route('validate.user') }}" class="btn btn-info">Login</a>
        </div>
    </nav>

    <div class="centered">
        <h3 class="h1class">"If you can manage time you <br>can manage fate"</h3>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
