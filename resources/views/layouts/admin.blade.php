<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <title>
        @yield('title')
    </title>
</head>
<body>
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('category.create')}}">Create</a>
            <a class="dropdown-item" href="{{route('category.index')}}">Show Categories</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('electronics.index')}}">Create Category Table</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul>

@yield('content')

<script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script>
    @yield('scripts')
</script>

</body>
</html>