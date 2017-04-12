    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}">
        <title@yield('title','后台首页')</title>
        <style>
            body {
                padding-top: 70px;
                padding-bottom: 30px;
            }

            .theme-dropdown .dropdown-menu {
                position: static;
                display: block;
                margin-bottom: 20px;
            }

            .theme-showcase > p > .btn {
                margin: 5px 0;
            }

            .theme-showcase .navbar .container {
                width: auto;
            }

        </style>
    </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">s60-后台管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="">后台首页</a> </li>
                <li><a href="{{url('admin/user-list')}}">用户管理</a> </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<h1>@yield('model-title','后台首页')</h1>
@yield('content')
</body>
</html>