<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HaloPets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-center ">
                HaloPets
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/invent">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
@yield('container')

</body>
</html>