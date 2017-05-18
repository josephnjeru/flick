<!doctype html>
<html>
<head>
@iclude(layouts.head)
</head>
<body>
<div class="container">
    <header>
    @include('layouts.header')
    </header>
    <div>
    @yield('content')
    </div>
    <footer>
    @include('layouts.footer')
    </footer>
</div>

</body>



</html>