<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .footer p {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: skyblue;
            margin: 0;
            padding: 10px;
        } 
        .main{
            margin-top: 100px;
            text-align: center;
        } 
        h1{
            color: red;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>


<div>
    <ul>
        <li>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Content</a>
           
        </li>
    </ul>
</div>

<div>
    @section('main')
    @show
</div>
    <div class="footer">
        <p>footer</p>
    </div>
</body>
</html>