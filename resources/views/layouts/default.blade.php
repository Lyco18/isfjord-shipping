<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="navbar">
        @include('includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

</div>
<footer class="footer">
    @include('includes.footer')
</footer>
</body>
</html>
