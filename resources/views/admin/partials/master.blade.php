<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../css/admin.css">
    <title>Admin</title>
</head>
<body>
    <nav>
        <span class="navbar-brand mb-0 h1">Hi Admin!</span>
    </nav>
    <div class="row">
        <div class="col-2">
            <div class="sidebar">
                <ul>
                    <li><a href="/">Dashboard</a></li>
                    <li><a href="/admin/category">Loại sản phẩm</a></li>
                    <li><a href="/admin/product">Sản phẩm</a></li>
                </ul>
            </div>
        </div>
        <div class="col-9">
            <div class="content">
                @yield('content')
            </div>

        </div>

    </div>
</body>
</html>
